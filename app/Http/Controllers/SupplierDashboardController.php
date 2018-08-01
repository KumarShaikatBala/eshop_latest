<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;


class SupplierDashboardController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth:supplier',['except'=>['create','store']]);
    }*/


    public function getTotalProductCount(){

        $countProduct = DB::table('products')->where('supplier_id','=',Auth::guard('supplier')->user()->id)->count(); //Get Supplier total product Count
        $countPendingOrder = DB::table('orders')->where('delivered','=','0')->count(); // Count Pending orders
        $countDeliveredOrder = DB::table('orders')->where('delivered','=','1')->count(); // Count Pending orders


        return view('backend.dashboard',compact('countProduct','countPendingOrder','countDeliveredOrder'));
    }

}
