<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'course',
        'time'
    ];

    public function students()
    {
        return $this->hasMany(Student::class,'class_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function teacher() 
    {
        return $this->belongsTo(Teacher::class);
    }

}
