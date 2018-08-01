<?php

namespace App\Http\Controllers;
use App\Address;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\FrontCustomer;
use App\Providers\AuthServiceProvider;
use Illuminate\Auth\Events\Registered;


class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:frontendcustomer');
    }


    public function store(Request $request)
    {
        // validate incoming request
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'address_primary' => 'required',
            'city' => 'required ',
            'mobile' => 'required',

        ]);
        Auth::guard('frontendcustomer')->user()->address()->create($request->all());

        // Return Last created Address id
          $addressId = DB::table('addresses')
                            ->latest()
                            ->first();


// dd($addressId);

// create order
        $user = Auth::guard('frontendcustomer')->user();
        $order = $user->orders()->create([
            'total'=> Cart::subtotal(),
            'delivered' => 0,
            'address_id' => $addressId->id


        ]);
        $cartItems = Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'quantity' => $cartItem->qty,
                'total' => $cartItem->qty*$cartItem->price
            ]);
        }

        return redirect('/product')->with('success','Product Order Successfully Done');


    }

    // checkout
    public function checkout(){
        return view('frontend.cart.checkout');
    }


}
