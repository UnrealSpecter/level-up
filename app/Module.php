<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    // protected $appends = ['is_done', 'totalLessons', 'lessonsDone'];
    protected $fillable = ['title', 'code', 'description'];

    public function introduction(){
        return $this->hasOne(Introduction::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'module_lesson');
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function levels(){
        return $this->belongsToMany(Level::class, 'level_module');
    }

    // public function getTotalLessonsAttribute(){
    //     return count($this->lessons);
    // }

    // public function getLessonsDoneAttribute(){
    //     $lessonsDone = 0;
    //     foreach($this->lessons as $lesson){
    //         if($lesson->isDone){
    //             $lessonsDone++;
    //         }
    //     }
    //     return $lessonsDone;
    // }
    //
    // public function getIsDoneAttribute() {
    //     $children = $this->lessons;
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
