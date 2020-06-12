<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * The users that belong to a lesson
     */
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'user_lesson');
    // }

    /**
     * The Subjects for the lesson.
     */
    public function subjects(){
        return $this->belongsToMany(Subject::class)->withPivot('is_done');
    }

}
