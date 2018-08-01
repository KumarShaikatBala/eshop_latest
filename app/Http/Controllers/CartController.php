<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // wiseliest page data collect using this method
        $cartitems = Cart::content();
        return view('frontend.cart.index',compact('cartitems'));
    }
    public function addtocart($id)
    {
        $item='';
        // when add to cart click then this function will run
        // this is basicaly store flashly cart item into current user wishlist

        $product = Product::find($id);
        Cart::add($id,$product->title,1,$product->price,['image'=>$product->image]);
//        $cartItems = Cart::content();
        echo $count= count(Cart::content()); // get total cart count on number




    }
    public function SinglePageAddtoCart(Request $request,$id)
    {
        // when add to cart click then this function will run
        // this is basicaly store flashly cart item into current user wishlist

        $product = Product::find($id);
        $qty = $request->qty;
        Cart::add($id,$product->title,$qty,$product->price,['image'=>$product->image]);
        echo $count= count(Cart::content());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rowId = $request->rowId;
        Cart::update($rowId,$request->qty);
//       $cartitems= Cart::content();
//        return view('frontend.cart.upCart',compact('cartitems'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Cart::remove($id);
       return back();
    }
}
