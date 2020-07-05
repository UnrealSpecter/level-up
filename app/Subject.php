<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $appends = ['is_done', 'tags'];
    protected $fillable = ['title', 'description'];

    /**
    * The assignments that belong to a subject
    */
    public function lessons(){
        return $this->belongsToMany(Lesson::class, 'lesson_subject');
    }

    /**
    * The assignments that belong to a subject
    */
    public function assignments(){
        return $this->belongsToMany(Assignment::class, 'subject_assignment')->withPivot('is_done');
    }

    /**
    * The resources that belong to a subject
    */
    public function materials(){
        return $this->hasMany(Material::class);
    }

    // public function getTagsAttribute()
    // {
    //     return $this->hasManyDeep(
    //         'App\Tag',['App\Material']
    //     );
    // }

    public function getTagsAttribute()
   {
       return $this->materials->pluck('tags')->collapse()->unique('id');
   }

    /**
    * Get all of the posts for the country.
    */
    // public function tagList()
    // {
    //     $resources = $this->resources;
    //     $tagList = collect();
    //     foreach($resources as $resource){
    //         $tagList->add($resource->tags);
    //     }
    //     dd($tagList->collapse()->unique());
    //
    // }

    public function getIsDoneAttribute() {
        $children = $this->assignments;
        $isDone = true;

        foreach($children as $child){
            if(!$child->isDone){
                $isDone = false;
            }
        }

        return $isDone;
    }

}
