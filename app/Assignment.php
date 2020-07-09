<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $appends = ['is_done'];
    protected $fillable = ['title', 'description'];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'subject_assignment')->withPivot('is_done');
    }

    public function getIsDoneAttribute() {
        // if(isset($this->pivot)){
        //     return $this->pivot->is_done ? true : false;
        // }
        // else {
            $parent = $this->subjects->first();
            return $parent->pivot->is_done ? true : false;
        // }

    }

    public function markAsDone(){
        $parent = $this->subjects()->first();
        $parent->assignments()->updateExistingPivot($this->id, ['is_done' => 1]);
    }


}
