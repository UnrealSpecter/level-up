<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * The lesson that belong to a user
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'module_lesson')->withPivot('is_done');
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function levels(){
        return $this->belongsToMany(Level::class, 'level_module')->withPivot('is_done');
    }
}
