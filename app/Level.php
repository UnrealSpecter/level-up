<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $appends = ['is_done', 'progress'];
    protected $fillable = ['title', 'description'];

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

    public function getProgressAttribute(){
        $totalModules = count($this->modules);
        $modulesDone = count($this->modules->where('is_done', true));
        return round($modulesDone / $totalModules * 100);
    }

}
