<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Supplier;
use Session;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        $brands = brand::pluck('brand_name','id');
        $suppliers = Supplier::pluck('name','id');
       return view('backend.product.create',compact('categories','brands','suppliers'));
    }

    public function store(Request $request)
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
            'brand_id' => 'required|integer',
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
        Session::put('message', 'Product add Successfully !');
        return redirect('/product-create');

    }
    public function show()
    {
        //$products = DB::select('select * from products');

        $products = Product::all();
        return view('backend.product.view',['products'=>$products]);
    }

    // This is Admin Product List View Method
    public function table_view()
    {
        //$products = DB::select('select * from products');

        $products = Product::all();
        return view('backend.product.table_view',['products'=>$products]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', ['product' =>$product]);
    }
    public function update(Request $request, $id)
    {
        // Update Via Edit
        $product = Product::find($id);
        $this->validate($request, [
            'file' => 'image|nullable|max:1999',
            'file2' => 'image|nullable|max:1999',
            'file3' => 'image|nullable|max:1999',
            'quantity' => 'required|integer|nullable',
        ]);


        $product->title = $request['title'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->product_id = $request['product_id'];
        $product->description = $request['description'];



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

            move_uploaded_file($image_tmp_name,'storage/uploads/product_img/'.$_POST['file']);
            $product->image3 =  $_POST['file3'];
        }


        $product->save();
        Session::put('message', 'Product Update Successfully !');
        return redirect('/product-view');

    }
    public function destroy($id)
    {

        $product = Product::findOrFail($id);
       // Storage::delete('public/uploads/product_img'.$product->image); // image also delete from public storage

        Product::destroy($id);
        Session::put('message','Product Deleted Successfully !');
        return redirect('/product-view');
    }
}
