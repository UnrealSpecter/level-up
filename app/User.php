<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * The lesson that belong to a user
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'user_lesson')->withPivot('is_done');
    }

    /**
     * The assignments that belong to a user
     */
     public function assignments()
     {
         // $user many to many lesson many to many subject many to many assignment
         return $this->hasManyDeep('App\Assignment', ['user_lesson', Lesson::class, 'lesson_subject', Subject::class, 'subject_assignment']);
     }

}
