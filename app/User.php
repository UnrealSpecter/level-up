<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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
        return $this->belongsToMany(Assignment::class, 'user_assignment');
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'user_subject');
    }
}
