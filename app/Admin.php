<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    use Notifiable;

    protected $guard = "admins";

    protected $fillable = ['name','password','email'];

    protected $hidden = ['password','remember_token'];
}
