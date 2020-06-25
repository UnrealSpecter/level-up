<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer', 'is_correct'];

    public function assignments(){
        return $this->belongsToMany(Assignment::class, 'assignment_answer');
    }
}
