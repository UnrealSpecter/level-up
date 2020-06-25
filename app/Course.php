<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description'];

    public function modules(){
        return $this->hasMany(Module::class);
    }

    public function getModuleCountAttribute() {
        return count($this->modules);
    }

}
