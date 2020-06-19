<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /*
    * The Answers belonging to a Assignment.
    */
    public function answers(){
        return $this->belongsToMany(Answer::class, 'assignment_answer')->withPivot('is_done');
    }

    /*
    * The Answers belonging to a Assignment.
    */
    public function subjects(){
        return $this->belongsToMany(Subject::class, 'subject_assignment')->withPivot('is_done');
    }
}
