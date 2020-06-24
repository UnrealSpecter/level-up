<?php

namespace App;

Use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        static::pivotUpdated(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {

            $subject = $model;

            $children = $subject->assignments;

            $subjectIsDone = true;

            foreach($children as $child){
                if(!$child->pivot->is_done){
                    $subjectIsDone = false;
                }
            }

            if($subjectIsDone){
                $subject->isDone();
            }

        });

    }

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

    /**
    * Get all of the posts for the country.
    */
    // public function tagList()
    // {
    //     $resources = $this->resources;
    //     $tagList = collect();
    //     foreach($resources as $resource){
    //         $tagList->add($resource->tags);
    //     }
    //     dd($tagList->collapse()->unique());
    //
    // }

    public function isDone(){
        $parent = $this->lessons()->first();
        $parent->subjects()->updateExistingPivot($this->id, ['is_done' => 1]);
    }

}
