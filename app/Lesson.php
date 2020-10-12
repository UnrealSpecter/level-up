<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'description'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'lesson_subject');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'module_lesson');
    }

}
