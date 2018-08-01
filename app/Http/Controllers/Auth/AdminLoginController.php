<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\admin;

class AdminLoginController extends Controller
{
    public function create()
    {
        return view('backend.admin.register');
    }

    public function store(Request $request)
    {
        if($request->password_confirmation==$request->password){
            if( admin::create(
                ['name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                ])){
                return redirect('adminlogin');
            }
        }
        return redirect('adminsignup')->with('passwordnotmatch','Password doesnt match !!');
    }

    public function LoginForm()
    {
        return view('backend.admin.login');
    }


    public function login(Request $request)
    {

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/root/dashboard');
        }else{
            return redirect()->back()->with('email');
        }
//        return $request;
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('product');
    }

}
