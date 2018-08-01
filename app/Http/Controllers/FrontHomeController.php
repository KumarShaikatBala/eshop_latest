<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\brand;
use App\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontHomeController extends Controller
{
    public function all_product()
    {
        $featured_products = DB::table('products')->where('featured', 1)->inRandomOrder()->limit(10)->get();
        $categories = Category::all();
        $brands = brand::all();
        $products = Product::with('Category')->paginate(6);

        return view('frontend.shop.home',compact('featured_products','categories','brands','products'));
    }

    public function category_first_product()
    {
        //$products = Product::with('Category')->get();

         $categories = Category::with('products')->get();


        $products = Product::with('Category')->paginate(6);
        return view('frontend.shop.home',compact('categories','brands','products'));
    }
}
