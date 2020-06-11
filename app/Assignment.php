<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /*
    * The Answers belonging to a Assignment.
    */
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
