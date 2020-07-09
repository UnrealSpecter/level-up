<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    protected $appends = ['full_name'];

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'user_level');
    }

    // public function getCurrentLevelAttribute(){
    //     return $this->levels->where('is_done', true)->first() !== null ? $this->levels->where('is_done', true)->first() : $this->levels->first();
    // }

}
