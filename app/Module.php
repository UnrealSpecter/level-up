<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['title', 'code', 'description'];

    // public function introduction()
    // {
    //     return $this->hasOne(Introduction::class);
    // }

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'level_module');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'module_lesson');
    }

    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }

}
