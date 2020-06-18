<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
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
}
