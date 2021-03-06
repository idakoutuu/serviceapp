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
        'gender','birth',
        'prefecture_id', 'profession_id'
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

    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture');
    }

    public function hobby()
    {
        return $this->belongsToMany('App\Hobby', 'hobby_user', 'user_id', 'hobby_id');
    }

    public function profession()
    {
        return $this->belongsTo('App\Profession');
    }

    public function contact()
    {
        return $this->hasMany('App\Contact');
    }

    public function photograph()
    {
        return $this->hasOne('App\Photograph');
    }
}

