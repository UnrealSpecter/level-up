<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * The Subjects for the lesson.
     */
    public function subjects(){
        return $this->belongsToMany(Subject::class)->withPivot('is_done');
    }

}
