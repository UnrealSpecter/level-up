<?php

namespace App;

Use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        static::pivotUpdated(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {

            $module = $model;
        
            $children = $module->lessons;

            $moduleIsDone = true;

            foreach($children as $child){
                if(!$child->pivot->is_done){
                    $moduleIsDone = false;
                }
            }

            if($moduleIsDone){
                $module->isDone();
            }

        });

    }

    public function introduction(){
        return $this->hasOne(Introduction::class);
    }

    /**
     * The lesson that belong to a user
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'module_lesson')->withPivot('is_done');
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function levels(){
        return $this->belongsToMany(Level::class, 'level_module')->withPivot('is_done');
    }

    public function isDone(){
        $parent = $this->levels()->first();
        $parent->modules()->updateExistingPivot($this->id, ['is_done' => 1]);
    }
}
