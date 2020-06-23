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

        // dd('pivot updated');

        $parent = $model->lessons->first();

        $siblings = $model->assignments;

        $parentIsDone = true;

        foreach($siblings as $sibling){
            if(!$sibling->pivot->is_done){
                $parentIsDone = false;
            }
        }

        if($parentIsDone){
            dd('update parent');
            $parent->update();
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

}
