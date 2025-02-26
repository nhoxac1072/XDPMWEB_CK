<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home

route::get('/','App\Http\Controllers\homecontroller@index');
route::get('/category/{cateid}','App\Http\Controllers\homecontroller@cateindex');
route::get('/brand/{brandid}','App\Http\Controllers\homecontroller@brandindex');
route::get('/productdetail/{id}','App\Http\Controllers\homecontroller@detailsp')->name('productdetail');

//users
route::get('/loginpage','App\Http\Controllers\homecontroller@loginpage');
route::get('/registerpage','App\Http\Controllers\homecontroller@registerpage');
route::get('/edituserpage','App\Http\Controllers\homecontroller@edituserpage');
route::get('/userlogout','App\Http\Controllers\usercontroller@userlogout');
route::post('/userlogin','App\Http\Controllers\usercontroller@userlogin');
route::post('/userregister','App\Http\Controllers\usercontroller@userregister');
route::post('/edituser','App\Http\Controllers\usercontroller@edituser');

Route::get('/login/google','App\Http\Controllers\usercontroller@loginGoogle');
Route::get('/login/google/callback','App\Http\Controllers\usercontroller@loginGoogleCallback');

Route::get('/login/facebook','App\Http\Controllers\usercontroller@loginFacebook');
Route::get('/login/facebook/callback','App\Http\Controllers\usercontroller@loginFacebookCallback');
//reset
Route::get('/reset', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    return \Redirect::to('/');
});


// backend
route::get('/admin','App\Http\Controllers\admincontroller@index');
route::get('/dashboard','App\Http\Controllers\admincontroller@showdashboard');
route::get('logout','App\Http\Controllers\admincontroller@logout');

route::post('/dashboard','App\Http\Controllers\admincontroller@dashboard');



//  sản phẩm 
route::get('/addproduct','App\Http\Controllers\productcontroller@addproduct');
route::get('/allproduct','App\Http\Controllers\productcontroller@allproduct');

route::get('/edit-product/{cateid}','App\Http\Controllers\productcontroller@edit_product');
route::get('/delete-product/{cateid}','App\Http\Controllers\productcontroller@delete_product');

route::get('/unactiveproduct/{cateid}','App\Http\Controllers\productcontroller@unactive_product');
route::get('/active-product/{cateid} ','App\Http\Controllers\productcontroller@active_product');

route::post('/saves-product','App\Http\Controllers\productcontroller@save_product');
route::post('/updates-product/{cateeid}','App\Http\Controllers\productcontroller@update_product');


// dongf sản phẩm item
route::get('/add-brand-product','App\Http\Controllers\dongSPcontroller@add_brand_product');
route::get('/allbrand','App\Http\Controllers\dongSPcontroller@all_brand_product');

route::get('/edit-brand/{brandid}','App\Http\Controllers\dongSPcontroller@edit_brand_product');
route::get('/delete-brand/{brandid}','App\Http\Controllers\dongSPcontroller@delete_brand_product');

route::get('/unactive-brandproduct/{brandid}','App\Http\Controllers\dongSPcontroller@unactive_brand_product');
route::get('/active-brandproduct/{brandid} ','App\Http\Controllers\dongSPcontroller@active_brand_product');

route::post('/save-brand-product','App\Http\Controllers\dongSPcontroller@save_brand_product');
route::post('/update-brand-product/{brandid}','App\Http\Controllers\dongSPcontroller@update_brand_product');


//show prodcut controller
route::get('/add-product','App\Http\Controllers\showproductcontroller@add_product');
route::get('/all-show-product','App\Http\Controllers\showproductcontroller@all_show_product');

route::get('/edit-show-product/{id}','App\Http\Controllers\showproductcontroller@edit_showproduct');
route::get('/delete-showproduct/{id}','App\Http\Controllers\showproductcontroller@delete_product');

// route::get('/unactive-brandproduct/{id}',[dongSPcontroller::class,'unactive_product']);
// route::get('/active-brandproduct/{id} ',[dongSPcontroller::class,'active_product']);

route::post('/save-product','App\Http\Controllers\showproductcontroller@save_product');
route::post('/update-showproduct/{id}','App\Http\Controllers\showproductcontroller@update_product');


//cart
route::post('/homeaddcart','App\Http\Controllers\cartcontroller@storefromhome');
route::post('/singleaddcart','App\Http\Controllers\cartcontroller@storefromsingle');

route::get('/incqtycart/{id}/{option}','App\Http\Controllers\cartcontroller@incqtycart');
route::get('/decqtycart/{id}/{option}','App\Http\Controllers\cartcontroller@decqtycart');

route::get('/cart','App\Http\Controllers\cartcontroller@cartview');
route::get('/delcart/{id}/{option}','App\Http\Controllers\cartcontroller@delcart');

//checkout
route::post('/checkout','App\Http\Controllers\checkoutcontroller@checkout');

//order
route::post('/order','App\Http\Controllers\billController@ordermail');

