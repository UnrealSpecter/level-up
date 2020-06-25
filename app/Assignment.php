<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $appends = ['is_done'];
    protected $fillable = ['title', 'description'];
    /*
    * The Answers belonging to a Assignment.
    */
    public function answers(){
        return $this->belongsToMany(Answer::class, 'assignment_answer');
    }

    /*
    * The Answers belonging to a Assignment.
    */
    public function subjects(){
        return $this->belongsToMany(Subject::class, 'subject_assignment');
    }

    public function check($answer){
        if($answer->is_correct){
            $parent = $this->subjects()->first();
            $parent->assignments()->updateExistingPivot($this->id, ['is_done' => 1]);
        }
        else {
            dd('is incorrect');
        }

        return $this;
    }

    public function getIsDoneAttribute() {

        return false;
        // $children = $this->answers;
        // $isDone = true;
        //
        // foreach($children as $child){
        //     if(!$child->isDone){
        //         $isDone = false;
        //     }
        // }
        //
        // return $isDone;
    }

}
