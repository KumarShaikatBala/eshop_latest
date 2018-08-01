<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function route;
use Socialite;

class FrontCustomerLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:frontendcustomer',['except'=>'logout']);
    }

    public function showLoginForm(){
        return view('frontend.customers.customer_log_in');
    }

    public function login(Request $request)
    {
        if(Auth::guard('frontendcustomer')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
//            return redirect('product');
            return redirect()->intended();
        }else{
            return redirect()->back()->with('email');
        }
    }

    public function logout()

    {
        Auth::guard('frontendcustomer')->logout();
        return redirect('product');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $token = $user->name;
    }



}
