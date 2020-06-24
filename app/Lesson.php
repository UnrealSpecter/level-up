<?php

namespace App;

Use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        static::pivotUpdated(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {

            $lesson = $model;

            $children = $lesson->subjects;
        
            $lessonIsDone = true;

            foreach($children as $child){
                if(!$child->pivot->is_done){
                    $lessonIsDone = false;
                }
            }

            if($lessonIsDone){
                $lesson->isDone();
            }

        });

    }

    /**
     * The Subjects for the lesson.
     */
    public function subjects(){
        return $this->belongsToMany(Subject::class, 'lesson_subject')->withPivot('is_done');
    }

    public function modules(){
        return $this->belongsToMany(Module::class, 'module_lesson')->withPivot('is_done');
    }

    public function isDone(){
        $parent = $this->modules()->first();
        $parent->lessons()->updateExistingPivot($this->id, ['is_done' => 1]);
    }

}
