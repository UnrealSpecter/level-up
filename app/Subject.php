<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $appends = ['tags'];
    protected $fillable = ['title', 'description'];

    public function lessons(){
        return $this->belongsToMany(Lesson::class, 'lesson_subject');
    }

    public function assignments(){
        return $this->belongsToMany(Assignment::class, 'subject_assignment')->withPivot('is_done');
    }

    public function materials(){
        return $this->hasMany(Material::class);
    }

    public function getTagsAttribute()
    {
        return $this->materials->pluck('tags')->collapse()->unique('id');
    }

    // public function getIsDoneAttribute() {
    //     $children = $this->assignments;
    //     $isDone = true;
    //
    //     foreach($children as $child){
    //         if(!$child->isDone){
    //             $isDone = false;
    //         }
    //     }
    //
    //     return $isDone;
    // }

}
