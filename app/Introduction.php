<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    public function module() {
        return $this->belongsTo(Module::class);
    }
}
