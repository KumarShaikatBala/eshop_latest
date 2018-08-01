<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\brand;
use App\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontProductController extends Controller
{
   // product page
    public function index()
    {

        return view('frontend.shop.home',compact('categories','brands','products'));
    }
    // Show all product
    public function all_product()
    {
        //$products = Product::with('Category')->get();

        // $categories = Category::with('products')->get();
        $categories = Category::all();
        $brands = brand::all();
        $products = Product::with('Category')->paginate(18);
        return view('frontend.shop.product',compact('categories','brands','products'));
    }

    // Get all category and send front shop page through foreach loop
    // Return Category ways Products
    public function category_products($id)
    {
        $cat_name = Category::find($id);
        $categories = Category::all();
        $brands = brand::all();
        $products = Product::where('category_id', '=',$id)->paginate(18);
        return view('frontend.shop.product',compact('categories','brands','products','cat_name'));
    }
    // Return Brand ways Products
    public function brand_products($id)
    {
        $brand_name = brand::find($id);
        $categories = Category::all();
        $brands = brand::all();
        $products = Product::where('brand_id', '=',$id)->paginate(18);
        return view('frontend.shop.product',compact('categories','brands','products','brand_name'));
    }

  // Single page view
    public function show($id)
    {

       $product = Product::find($id);
//       $items = Product::where('category_id', $id)->inRandomOrder()->limit(4)->get();
        $catid = $product->category_id;
       $items = DB::table('products')->where('category_id', $catid)->inRandomOrder()->limit(4)->get();

//       dd($items);


        // $products = Product::with('Category')->get(); compact('categories')
        return view('frontend.shop.single_page',compact('product','items'));

        $product = Product::find($id);
       // $products = Product::with('Category')->get(); compact('categories')
        return view('frontend.shop.single_page',compact('product'));

    }


}
