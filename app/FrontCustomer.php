<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FrontCustomer extends Authenticatable
{
    protected $guard='frontendcustomer';

    protected $fillable = [
        'name','gender','email','password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address(){
        return  $this->hasMany(Address::class);
    }
    public function orders(){
        return  $this->hasMany(Order::class);
    }
}
