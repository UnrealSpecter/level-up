<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $appends = ['is_done'];
    protected $fillable = ['title', 'description'];

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'lesson_subject');
    }

    public function modules(){
        return $this->belongsToMany(Module::class, 'module_lesson');
    }

    public function getIsDoneAttribute() {
        $children = $this->subjects;
        $isDone = true;

        foreach($children as $child){
            if(!$child->isDone){
                $isDone = false;
            }
        }

        return $isDone;
    }

}
