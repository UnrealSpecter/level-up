<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['label', 'icon'];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'material_tag');
    }
}
