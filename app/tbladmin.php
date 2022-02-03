<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class tbladmin extends Authenticable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'email', 'password'
    ];

    protected $hidden = ['password'];
}
