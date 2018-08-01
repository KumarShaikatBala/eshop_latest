<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supplier extends Authenticatable
{

    protected $guard='supplier';

    protected $fillable = [
        'name','email','mobile','password','terms','approval'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }



}
