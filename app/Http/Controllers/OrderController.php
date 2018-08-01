<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Supplier;

class OrderController extends Controller
{


    public function orders_pending(){
        // get pending orders
        $orders = Order::where('delivered','=','0')->get();
        return view('backend.orders',compact('orders'));

    }
    public function orders_delivered(){
        // get delivered orders
         $orders = Order::where('delivered','=','1')->get();
        return view('backend.orders',compact('orders'));

    }
    public function orders_all(){
        // get all orders
        $orders = Order::all();
        return view('backend.orders',compact('orders'));

    }

    public function update(Request $request, $id){
       $order = Order::find($id);
       $order->delivered = $request['delivered'];
       $order->save();

       return back();

    }
    public function single_view($id){
        // Order Single View
        $order = Order::find($id);
        return view('backend/order_single_view',compact('order'));
    }
}
