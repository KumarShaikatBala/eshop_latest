<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends  Authenticatable
{
    protected $guard='admin';
    protected $fillable = [
        'name','email','password'
    ];
}
