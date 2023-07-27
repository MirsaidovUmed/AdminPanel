<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [

        'user_id',
        'uuid',
        'amount'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
