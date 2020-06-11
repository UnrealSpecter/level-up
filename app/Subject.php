<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The assignments that belong to a subject
     */
     public function assignments(){
         return $this->hasMany(Assignment::class);
     }

     /**
      * The resources that belong to a subject
      */
      public function resources(){
          return $this->hasMany(Resource::class);
      }

      public function users(){
          return $this->belongsToMany(User::class, 'user_subject');
      }
}
