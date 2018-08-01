<?php

namespace App\Http\Controllers;

use App\Supplier;
use function compact;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function view;
use App\Category;
use App\brand;
use App\Product;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Auth\FrontSupplierLoginController;

class frontEndSupplierControlle extends Controller
{
  /*  public function __construct($model)
    {
        $this->model = $model;
    }*/

    public function index()
    {
        $products = DB::table('products')->where('supplier_id','=',Auth::guard('supplier')->user()->id)->get();  //Get Supplier total product Count
        $countProduct = DB::table('products')->where('supplier_id','=',Auth::guard('supplier')->user()->id)->count();  //Get Supplier total product Count
        $countPendingOrder = DB::table('orders')->where('delivered','=',Auth::guard('supplier')->user()->id)->count();// Count Pending orders
//        $countPendingOrder = DB::table('orders')->where([
//            ['delivered', '=', '0'],
//            ['supplier_id', '=', Auth::guard('supplier')->user()->id],
//        ])->count();
        $countDeliveredOrder = DB::table('orders')->where('delivered',Auth::guard('supplier')->user()->id)->count(); // Count Pending orders

        $supplier=Supplier::select('name','email','brand','mobile','address')->where('id','=',Auth::guard('supplier')->user()->id)->get()->first();
        return view('frontend.suppliers.supplier_single_show',compact('supplier','countProduct','countPendingOrder','countDeliveredOrder','products'));
    }
    public function create()
    {
        return view('frontend.suppliers.sign_up');
    }

    public function store(Request $request)
    {
        /*$brand_logo=$request->file('brand_logo');
        $brand_logo_name=$brand_logo->getClientOriginalName();
        $ext = $request->brand_logo->getClientOriginalExtension();
        $brand_logo_name=time().'.'.$ext;

        $upload_path_for_brand_logo='uploaded_files/brand_logo/';
        $brand_logo->move($upload_path_for_brand_logo,$brand_logo_name);*/
        if($request->password_confirmation==$request->password){
        if( Supplier::create(
            ['name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>bcrypt($request->password),
            'terms'=>$request->terms,
            'approval'=>false,

        ])){
            return redirect('/product')->with('success','thank you we will contact with you very soon then you will able to login');

           // return "thank you we will contact with you very soon then you will able to login";
//            return redirect('supplierlogin')->with('success','Successfully Registered');
        }
        }
        return redirect('/supplier_sign_up');
    }

    public function getUpdateForm()
    {
        $data=Supplier::select('name','email','brand','mobile','address')->where('id','=',Auth::guard('supplier')->user()->id)->get()->first();
        return view('frontend.suppliers.supplier_update',compact('data'));

    }






    public function update(Request $request)
    {
        $brand_logo=$request->file('brand_logo');
        $brand_logo_name=$brand_logo->getClientOriginalName();
        $ext = $request->brand_logo->getClientOriginalExtension();
        $brand_logo_name=time().'.'.$ext;
        $upload_path_for_brand_logo='uploaded_files/brand_logo/';
        $brand_logo->move($upload_path_for_brand_logo,$brand_logo_name);

        DB::table('suppliers')
            ->where('id', Auth::id())
            ->update(['name' => $request->name,'email'=>$request->email,'brand'=>$request->brand,'brand_logo'=>$brand_logo_name,'address'=>$request->address,'mobile'=>$request->mobile,'bill'=>$request->bill]);
    }

    public function productCreate()
    {
        $categories = Category::pluck('name','id');
        $brands = brand::pluck('brand_name','id');
        $suppliers = Supplier::pluck('name','id');
        return view('frontend.suppliers.product.create',compact('categories','brands','suppliers'));
    }
    // supplier can store their product and manage
    public function productStore(Request $request)
    {
        // Check Validation
        $this->validate($request, [
            'file' => 'image|nullable|max:1999',
            'file2' => 'image|nullable|max:1999',
            'file3' => 'image|nullable|max:1999',
            'title' => 'required|string',
            'price' => 'required|integer',
            'quantity' => 'required|integer|nullable',
            'product_id' => 'required|string',
            'brand_id' => 'integer',
            'category_id' => 'required|integer',
            'supplier_id' => 'required|integer',
        ]);

        // Storing data
        $product = new Product;
        $product->title = $request['title'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->product_id = $request['product_id'];
        $product->brand_id = $request['brand_id'];
        $product->category_id = $request['category_id'];
        $product->supplier_id = $request['supplier_id'];
        $product->description = $request['description'];
        $product->status = 0 ;


        if($request->hasFile('file')){

            $_POST['file'] = $_FILES['file']['name'];
            $image_tmp_name = $_FILES['file']['tmp_name'];
            $name =  substr(md5(time()),'0','5');
            $data = explode('.',$_POST['file']);
            $_POST['file'] = $name.'.'.end($data);

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file']);
            $product->image =  $_POST['file'];
        }
        if($request->hasFile('file')){

            $_POST['file2'] = $_FILES['file2']['name'];
            $image_tmp_name = $_FILES['file2']['tmp_name'];
            $name =  substr(md5(time()),'0','5');
            $data = explode('.',$_POST['file2']);
            $_POST['file2'] = $name.'.'.end($data);

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file2']);
            $product->image2 =  $_POST['file2'];
        }
        if($request->hasFile('file3')){

            $_POST['file3'] = $_FILES['file3']['name'];
            $image_tmp_name = $_FILES['file3']['tmp_name'];
            $name =  substr(md5(time()),'0','5');
            $data = explode('.',$_POST['file3']);
            $_POST['file3'] = $name.'.'.end($data);

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file3']);
            $product->image3 =  $_POST['file3'];
        }


        $product->save();
        Session::put('message', 'Product Create Successfully !');
        return redirect('/supplier/product/create');

    }

    //supplier product view
    public function productView()
    {
        //$products = DB::select('select * from products');

        $products = Product::with('Category')->where('supplier_id','=',Auth::guard('supplier')->user()->id)->get();
        return view('frontend.suppliers.product.view',['products'=>$products]);
    }
    // product Edit
    public function productEdit($id)
    {
        $product = Product::find($id);
        if (Auth::guard('supplier')->user()->id !== $product->supplier_id){
            return redirect()->back();
        }
        return view('frontend.suppliers.product.edit', ['product' =>$product]);
    }
    // product update
    public function productUpdate(Request $request, $id)
    {
        // Update Via Edit
        $product = Product::find($id);
        $this->validate($request, [
            'file' => 'image|nullable|max:1999',
            'file2' => 'image|nullable|max:1999',
            'file3' => 'image|nullable|max:1999',
        ]);


        $product->title = $request['title'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->product_id = $request['product_id'];
//        $product->brand_id = $request['brand_id'];
//        $product->category_id = $request['category_id'];
//        $product->supplier_id = $request['supplier_id'];
        $product->description = $request['description'];
//        $product->status = $request['status'];


        if($request->hasFile('file')){

            $_POST['file'] = $_FILES['file']['name'];
            $image_tmp_name = $_FILES['file']['tmp_name'];
            $name =  substr(md5(time()),'0','5');
            $data = explode('.',$_POST['file']);
            $_POST['file'] = $name.'.'.end($data);

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file']);
            $product->image =  $_POST['file'];
        }
        if($request->hasFile('file2')){

            $_POST['file2'] = $_FILES['file2']['name'];
            $image_tmp_name = $_FILES['file2']['tmp_name'];
            $name =  substr(md5(time()),'0','10');
            $data = explode('.',$_POST['file2']);
            $_POST['file2'] = $name.'.'.end($data);

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file2']);
            $product->image2 =  $_POST['file2'];
        }
        if($request->hasFile('file3')){

            $_POST['file3'] = $_FILES['file3']['name'];
            $image_tmp_name = $_FILES['file3']['tmp_name'];
            $name =  substr(md5(time()),'0','15');
            $data = explode('.',$_POST['file3']);
            $_POST['file3'] = $name.'.'.end($data);

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file3']);
            $product->image3 =  $_POST['file3'];
        }


        $product->save();
        Session::put('message', 'Product Update Successfully !');
        return redirect('/supplier/product/view');

    }
    public function destroy($id)
    {

        $product = Product::find($id);
        if (Auth::guard('supplier')->user()->id !== $product->supplier_id){
            return redirect()->back();
        }
//        Storage::delete('public/uploads/product_img'.$product->image); // image also delete from public storage
        Product::destroy($id);
        Session::put('message','Product Deleted Successfully !');
        return redirect()->back();
    }


}
