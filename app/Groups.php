<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
   protected $fillable = [

       'name',
       'time',
       'user_id',

   ];




   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
