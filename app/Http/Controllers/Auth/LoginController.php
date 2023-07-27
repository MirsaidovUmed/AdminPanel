<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->user = new User;
    }

    public function login(Request $request)
    {
        // Check validation - Note : you can change validation as per your requirements
        $this->validate($request, [
            'phone' => 'required|digits:9',

        ]);

        // Get user record
        $user = User::where('phone', $request->get('phone'))->first();

        // Check Condition Mobile No. Found or Not
        if($request->get('phone') != $user->phone) {
            \Session::put('errors', 'Please Register First mobile number.!!');
            return back();
        }


        \Auth::login($user);
        if(Auth::user()->usertype == 'admin')
        {
            return redirect('dashboard');
        }
        else
        {
            return redirect('home');
        }
    }
}
