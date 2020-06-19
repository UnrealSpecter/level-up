<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    /**
     * The assignments that belong to a subject
     */
     public function lessons(){
         return $this->belongsToMany(Lesson::class, 'lesson_subject')->withPivot('is_done');
     }

    /**
     * The assignments that belong to a subject
     */
     public function assignments(){
         return $this->belongsToMany(Assignment::class, 'subject_assignment')->withPivot('is_done');
     }

     /**
      * The resources that belong to a subject
      */
      public function resources(){
          return $this->hasMany(Resource::class);
      }

}
