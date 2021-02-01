<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['description'];

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'competence_level');
    }
}
