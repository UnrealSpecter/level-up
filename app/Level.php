<?php

namespace App;

Use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        static::pivotUpdated(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {

            $level = $model;

            $children = $level->modules;

            $levelIsDone = true;

            foreach($children as $child){
                if(!$child->pivot->is_done){
                    $levelIsDone = false;
                }
            }

            if($levelIsDone){
                $level->isDone();
            }

        });

    }

    /**
     * The lesson that belong to a user
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class, 'level_module')->withPivot('is_done');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_level')->withPivot('is_done');
    }

    public function isDone(){
        $parent = $this->users()->first();
        $parent->levels()->updateExistingPivot($this->id, ['is_done' => 1]);
    }
}
