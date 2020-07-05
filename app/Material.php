<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['title', 'link'];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'material_tag');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }


}
