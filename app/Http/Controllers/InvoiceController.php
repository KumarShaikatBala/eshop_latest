<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Barryvdh\DomPDF\Facade as PDF;

class InvoiceController extends Controller
{
    public function invoice_create($id){
        $order = Order::find($id);
        return view('backend/invoice',compact('order'));
    }


     public function make_invoice ($id){
         $order = Order::find($id);
           $pdf = PDF::loadView('backend.invoice',$order);
         return $pdf->download('invoice.pdf');
     }




}
