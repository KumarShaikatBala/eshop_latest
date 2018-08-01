<?php

namespace App\Http\Controllers;

use function dd;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use function redirect;
use function view;
use App\FrontCustomer;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use function with;

class frontEndCustomerController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        return view('frontend.customers.customer_reg');
    }

    public function store(Request $request)
    {

       if( FrontCustomer::create([
           'name'=>$request->name,
           'gender'=>$request->gender,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'password_confirmation'=>$request->password_confirmation,
       ])){
           return redirect('customerlogin')->with('success','Successfully Registered');
       }


    }

    public function login(Request $request){

    }





}
