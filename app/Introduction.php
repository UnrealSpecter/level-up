<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $fillable = ['body'];

    public function module() {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
