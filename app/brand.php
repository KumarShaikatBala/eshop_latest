<?php

namespace App;
use App\Http\Controllers\brandsController;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $fillable = [
        'brand_name','brand_owner_name','brand_catagory','brand_logo','brand_description'
    ];

    // Product one to many relationship
    public function products(){
        return $this->hasMany(Product::class);
    }

}
