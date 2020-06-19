<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * The Subjects for the lesson.
     */
    public function subjects(){
        return $this->belongsToMany(Subject::class, 'lesson_subject')->withPivot('is_done');
    }

    public function modules(){
        return $this->belongsToMany(Module::class, 'module_lesson')->withPivot('is_done');
    }

}
