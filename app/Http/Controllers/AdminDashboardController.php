<?php

namespace App\Http\Controllers;

use function compact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Supplier;
use function view;
use Illuminate\Support\Facades\DB;
use Session;


class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

//        $products = Product::with('Category')->where('supplier_id','=',Auth::guard('supplier')->user()->id)->get();
        $suppliers = Supplier::all();
        return view('backend.admin.dashboard',compact('suppliers'));
    }


    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $data=Supplier::find($id);
       return view('backend.admin.approval',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data=Supplier::find($id);
        $data->update($request->only('approval'));
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
