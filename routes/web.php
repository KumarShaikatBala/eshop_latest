<?php
// Admin Area
Route::get('/','FrontProductController@all_product');
//admin(tomal)
Route::get('adminlogin','Auth\AdminLoginController@LoginForm')->name('adminlogin');
Route::get('adminlogout','Auth\AdminLoginController@logout')->name('adminlogout');
Route::post('adminloginsubmit','Auth\AdminLoginController@login')->name('adminloginsubmit');
Route::get('adminsignup','Auth\AdminLoginController@create')->name('adminsignup');
Route::post('adminregister','Auth\AdminLoginController@store')->name('adminregister');
Route::get('supplier/{id}','AdminDashboardController@edit');
Route::get('supplier-approval/{id}','AdminDashboardController@update');
//Admin Dashboard (sumon)
Route::get('/root/dashboard','AdminDashboardController@index');


// Product (sumon)
//Route::prefix('product')->group(function () {
    Route::get('/product-create', 'ProductController@create');
    Route::post('/product-store', 'ProductController@store');
    Route::get('/product-view', 'ProductController@show');
    Route::get('/product_table_view', 'ProductController@table_view');
    Route::get('/product-edit/{id}', 'ProductController@edit');
    Route::post('/product-update/{id}', 'ProductController@update');
    Route::post('/product-destroy/{id}', 'ProductController@destroy');
//}

// Category (sumon)
Route::get('/category-view', 'CategoryController@index');
Route::get('/category-create', 'CategoryController@create');
Route::post('/category-store', 'CategoryController@store');
Route::post('/category-delete/{id}', 'CategoryController@destroy');

//Orders (sumon)
// get all pending order using status 0
Route::get('/orders-pending', 'OrderController@orders_pending');
// get all delivered order using status 1
Route::get('/orders-delivered', 'OrderController@orders_delivered');
// get all orders
Route::get('/orders-all', 'OrderController@orders_all');
// submit delivered by update value 1
Route::post('submit-delivered/{id}','OrderController@update');
//Order SIngle View
Route::get('order-single-view/{id}','OrderController@single_view');

//Invoice
Route::get('invoice-create/{id}','InvoiceController@invoice_create');
Route::get('make-invoice/{id}','InvoiceController@make_invoice');


// front home page
Route::get('home','FrontHomeController@all_product');


// Front page testing rout

Route::get('supplier-single', function (){
   return view('backend.admin.login');
});

//brand(tomal)
Route::get('/brand-create', 'brandsController@create');
Route::post('/brand-store', 'brandsController@store');
Route::get('/brands-view', 'brandsController@index');
Route::get('/brands-show/{id}', 'brandsController@show');
Route::get('/brands-edit/{id}', 'brandsController@edit');
Route::patch('/brand-update/{id}', 'brandsController@update');
Route::delete('/brands-destroy/{id}','brandsController@destroy');


//Front Area (sumon)
// Product (sumon)
Route::get('product', 'FrontProductController@all_product');

// single view product
Route::get('/product/{id}', 'FrontProductController@show');

// Return Category ways Products
Route::get('/category/products/{id}', 'FrontProductController@category_products');
// Return Brands ways Products
Route::get('/brand/products/{id}', 'FrontProductController@brand_products');



// Cart (sumon)
Route::get('/cart', 'CartController@index');
Route::get('/cart/addtocart/{id}', 'CartController@addtocart');
Route::get('/cart-update/{id}', 'CartController@update');
Route::get('/cart-delete/{id}', 'CartController@destroy');

// add to cart from single page custom quantity
Route::get('cart/singlePage/addtocart/{id}', 'CartController@SinglePageAddtoCart');

// store user address info from shipping info in checkout
Route::post('address-store','AddressController@store');


//Checkout (sumon)

Route::get('/checkout','AddressController@checkout');



// This Checkout route use middleware auth user login


//=======

//Front Area (tomal)
Route::get('customer_reg','frontEndCustomerController@create')->name('customer_reg');

Route::post('/customer_reg_store','frontEndCustomerController@store');
Route::get('customerlogin','Auth\FrontCustomerLoginController@showLoginForm')->name('customerlogin');
Route::get('customerlogout','Auth\FrontCustomerLoginController@logout')->name('customerlogout');
Route::post('frontendcustomerlogin','Auth\FrontCustomerLoginController@login')->name('frontendcustomerlogin');
Route::post('/customer_log_in_store','frontEndCustomerController@loginstore');
Route::post('/customer_reg_store','frontEndCustomerController@store');


//Supplier
Route::get('supplier_sign_up','frontEndSupplierControlle@create')->name('supplier_sign_up');
Route::get('supplierlogin','Auth\FrontSupplierLoginController@showLoginForm')->name('supplierlogin');
Route::post('supplierloginsubmit','Auth\FrontSupplierLoginController@login')->name('supplierloginsubmit');
Route::post('supplier_sign_up_store','frontEndSupplierControlle@store')->name('supplier_sign_up_store');
Route::get('frontsupplierindex','frontEndSupplierControlle@index')->name('frontsupplierindex');
Route::get('supplierlogout','Auth\FrontSupplierLoginController@logout')->name('supplierlogout');
Route::get('getUpdateForm','frontEndSupplierControlle@getUpdateForm')->name('getUpdateForm');
Route::post('supplier_update_store','supplier@update')->name('supplier_update_store');
// Supplier Dashboard Control (sumon)
Route::get('/supplier/product/create', 'frontEndSupplierControlle@productCreate');
Route::post('/supplier/product/store', 'frontEndSupplierControlle@productStore');
Route::get('/supplier/product/edit/{id}', 'frontEndSupplierControlle@productEdit');
Route::post('/supplier/product/update/{id}', 'frontEndSupplierControlle@productUpdate');
Route::get('/supplier/product/view', 'frontEndSupplierControlle@productView');
Route::post('/supplier/product/delete/{id}', 'frontEndSupplierControlle@destroy');

//Route::get('/supplier_update', function(){
//   return view('frontend.suppliers.supplier_update');
//});

// Facebook login

Route::get('login/facebook', 'Auth\FrontCustomerLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FrontCustomerLoginController@handleProviderCallback');









