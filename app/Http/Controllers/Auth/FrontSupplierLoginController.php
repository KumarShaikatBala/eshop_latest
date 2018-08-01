<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontSupplierLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:supplier',['except'=>'logout']);
    }

    public function showLoginForm()
    {
        return view('frontend.suppliers.log_in');
    }

    public function login(Request $request)
    {

        /*if(Auth::guard('supplier')->attempt(['email'=>$request->email,'password'=>$request->password,'approval'=>$request->approval,])){
            return redirect('frontsupplierindex')->with('success','Successfully Registered');
        }elseif(Auth::guard('supplier')->attempt(['email'=>$request->email,'password'=>$request->password,])){
            return "Not approved yet";
        }

else
            {
            return redirect()->back()->with('email')->with('passwordnotmatch','Password doesnt match !!');
        }*/
    //return $request;

       /* if(Auth::guard('supplier')->attempt(['email'=>$request->email,'password'=>$request->password,])){
            return "Not approved yet";
        }
        elseif(Auth::guard('supplier')->attempt(['email'=>$request->email,'password'=>$request->password,'approval'=>$request->approval,])){
            return redirect('frontsupplierindex')->with('success','Successfully Registered');}
        else
        {
            return redirect()->back()->with('email')->with('passwordnotmatch','Password doesnt match !!');
        }*/



        if(Auth::guard('supplier')->attempt(['email'=>$request->email,'password'=>$request->password,'approval'=>$request->approval,])){
            return redirect('frontsupplierindex')->with('success','Successfully Registered');}
        else
        {
            return redirect()->back()->with('email')->with('passwordnotmatch','Password doesnt match or not approve yet !!');
        }



    }





    public function logout()
    {
        Auth::guard('supplier')->logout();
        return redirect('product');
    }

}
