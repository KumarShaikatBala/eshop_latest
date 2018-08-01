<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
       'title','price','quantity','product_id','brand_id','category_id','supplier_id','description','image','image2','image3'
    ];

    // One to Many Relationship

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(brand::class);
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }



}
