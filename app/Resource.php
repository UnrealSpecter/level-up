<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function tags(){
        return $this->belongsToMany(Tag::class, 'resource_tag');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
