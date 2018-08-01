<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'first_name','last_name','address_primary','city','mobile'
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }

}
