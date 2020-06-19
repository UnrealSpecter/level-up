<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function assignments(){
        return $this->belongsToMany(Assignment::class, 'assignment_answer')->withPivot('is_done');
    }
}
