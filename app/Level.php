<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    // use PivotEventTrait;
    protected $appends = ['is_done'];
    protected $fillable = ['title', 'description'];

    /**
     * The lesson that belong to a user
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class, 'level_module');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_level');
    }

    public function getIsDoneAttribute(){
        $children = $this->modules;
        $isDone = true;

        foreach($children as $child){
            if(!$child->isDone){
                $isDone = false;
            }
        }

        return $isDone;
    }

}
