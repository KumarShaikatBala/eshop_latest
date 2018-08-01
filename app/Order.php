<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total','delivered','address_id'];

    public function orderItems(){
        return $this->belongsToMany(Product::class )->withPivot('quantity','total');
    }

    public function FrontCustomer(){
        return $this->belongsTo(FrontCustomer::class);
    }
    public function address(){
        return $this->belongsTo(Address::class);
    }


}
