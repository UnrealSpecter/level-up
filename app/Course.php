<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description'];

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'course_level')->orderBy('title', 'asc');
    }

    public function getLevelCountAttribute()
    {
        return count($this->levels);
    }

}
