<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['description'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
