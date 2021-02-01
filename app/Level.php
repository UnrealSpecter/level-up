<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['title'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_level');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'level_module');
    }

    public function competences()
    {
        return $this->hasMany(Competence::class);
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'user_level');
    // }

}
