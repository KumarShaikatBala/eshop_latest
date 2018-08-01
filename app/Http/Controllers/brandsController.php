<?php

namespace App\Http\Controllers;

use App\Category;
use function compact;
use function dd;
use Illuminate\Http\Request;
use function view;
use function time;
use App\brand;
use Session;
class brandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=brand::all();
       return view('backend.brands.view',compact('brands'));
    }


    public function create()
    {
       $catagories=Category::select('name','id')->get();
        return view('backend.brands.create',compact('catagories'));
    }

    public function store(Request $request)
    {
        $brand_logo=$request->file('brand_logo');
        $brand_logo_name=$brand_logo->getClientOriginalName();
        $ext = $request->brand_logo->getClientOriginalExtension();
        $brand_logo_name=time().'.'.$ext;
        $upload_path_for_brand_logo='uploaded_files/brand_logo/';
        $brand_logo->move($upload_path_for_brand_logo,$brand_logo_name);


        brand::create(['name'=>$request->name,
            'brand_name'=>$request->brand_name,
            'brand_owner_name'=>$request->brand_owner_name,
            'brand_catagory'=>$request->brand_catagory,
            'brand_logo'=>$brand_logo_name,
            'brand_description'=>$request->brand_description,
        ]);

        Session::put('message','Brand added Successfully !');
        return redirect('/brand-create');

    }

    public function show($id)
    {
       $brands=brand::find($id);
       return view('backend.brands.show',compact('brands'));
    }

    public function edit($id)
    {
        $brands=brand::find($id);
        return view('backend.brands.edit',compact('brands'));
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $brands=brand::find($id);
        $brands->update($request->only('brand_name','brand_catagory','brand_description'));
        Session::put('message','Brand Updated Successfully !');
        return redirect('/brands-view');
    }


    public function destroy($id)
    {
        brand::destroy($id);

        Session::put('message','Brand Deleted Successfully !');
        return redirect('/brands-view');
    }
}
