<?php

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

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/login', 'LoginController@index');
Route::get('/', ['as'=>'index','uses'=>'indexController@index']);
Route::get('/login', ['uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);

Route::get('/home', 'HomeController@index');
Route::get('/add', 'HomeController@add');
Route::post('/add', 'HomeController@create');

Route::get('/stdList', 'HomeController@show');

Route::get('/edit/{sid}', 'HomeController@edit');
Route::get('/details/{sid}', 'HomeController@details');
Route::get('/delete/{sid}', 'HomeController@delete');

Route::get('/logout', 'logoutController@index');

//admin routes

Route::group([ 'prefix' =>'admin'], function(){

Route::get('/login', 'Auth\adminLoginController@showLoginForm')->name('admin.login');
Route::post('/login' , 'Auth\adminLoginController@login')->name('admin.login.submit');  
Route::get('/', 'adminPagesController@index')->name('admin.index');
Route::get('/userAdd', 'adminPagesController@userAdd')->name('admin.userAdd');
Route::post('/userAdd', 'adminPagesController@userCreate');
Route::get('/adminShow', 'adminPagesController@adminShow')->name('admin.adminShow');
Route::get('/resellerShow', 'adminPagesController@resellerShow')->name('admin.resellerShow');
Route::get('/supplierShow', 'adminPagesController@supplierShow')->name('admin.supplierShow');
Route::get('/supplierEdit/{id}', 'adminPagesController@supplierEdit')->name('admin.supplierEdit');
Route::post('/supplierEdit/{id}', 'adminPagesController@supplierUpdate')->name('admin.supplierUpdate');
Route::get('/resellerEdit/{id}', 'adminPagesController@resellerEdit')->name('admin.resellerEdit');
Route::post('/resellerEdit/{id}', 'adminPagesController@resellerUpdate')->name('admin.resellerUpdate');
Route::post('/resellerDelete/{id}', 'adminPagesController@resellerDelete')->name('admin.resellerDelete');
Route::post('/supplierDelete/{id}', 'adminPagesController@supplierDelete')->name('admin.supplierDelete');
Route::get('/edit', 'adminPagesController@edit')->name('admin.edit');
Route::get('/remove/{id}', 'adminPagesController@remove')->name('admin.remove');
    
Route::get('/productAdd', 'productController@index')->name('admin.productAdd');
Route::post('/productAdd', 'productController@productAdd');
Route::get('/productShow', 'productController@productShow')->name('admin.productShow');
Route::get('/product/edit/{id}', 'productController@productEdit')->name('admin.productEdit');
Route::post('/product/edit/{id}', 'productController@productUpdate')->name('admin.productUpdate');

Route::post('/product/delete/{id}', 'productController@productDelete')->name('admin.product.delete');
    
Route::get('/categoryShow', 'categoryController@categoryShow')->name('admin.categoryShow');
Route::get('/categoryCreate', 'categoryController@categoryCreate')->name('admin.categoryCreate');
Route::post('/categoryCreate', 'categoryController@categoryAdd');


Route::get('/profile', 'adminPagesController@profile')->name('admin.profile');
Route::get('/order', 'adminPagesController@order')->name('admin.order');
Route::get('/orderShow/{id}', 'adminPagesController@orderShow')->name('admin.orderShow');
Route::post('/paid/{id}', 'adminPagesController@paid')->name('admin.paid');
Route::get('/account', 'adminPagesController@account')->name('admin.account');
});


Route::get('/search', 'HomeController@search')->name('search');   


//User






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userDashboard', 'userController@userDashboard')->name('home.userDashboard');
Route::get('/userProfile', 'userController@userProfile')->name('home.userProfile');
Route::post('/userOrderButton', 'userController@userOrderButton')->name('home.userOrderButton');

Route::get('/categoryProduct/{id}', 'HomeController@categoryProduct')->name('home.categoryProduct');
Route::get('/productDetails/{id}', 'HomeController@details')->name('home.productDetails'); 
Route::get('/userOrder', 'userController@userShow')->name('home.userOrder');
Route::post('/userOrderSubmit', 'userController@userOrderSubmit')->name('home.userOrderSubmit');
Route::get('/account', 'userController@account')->name('home.account');
//Route::get('/userOrderForm', 'userController@userShow')->name('home.userOrder');
Route::get('/userOrderForm', function () {
    return view('home.pages.userOrderForm');
});


Route::group([ 'prefix' =>'supplier'], function(){
    
    Route::get('/login' , 'Auth\SupplierLoginController@showLoginForm')->name('supplier.login');
    Route::post('/login' , 'Auth\SupplierLoginController@login')->name('supplier.login.submit');
    Route::get('/' , 'SupplierController@index')->name('supplier.dashboard');
    //Route::get('/profile', 'userController@userProfile')->name('supplier.profile');
    Route::get('/productAdd' , 'SupplierController@productAdd')->name('supplier.productAdd');
    Route::post('/productAdd' , 'SupplierController@productAddSubmit')->name('supplier.productAddSubmit');
    Route::get('/productShow' , 'SupplierController@productShow')->name('supplier.productShow');
    Route::get('/product/edit/{id}', 'SupplierController@productEdit')->name('supplier.productEdit');
    Route::post('/product/edit/{id}', 'SupplierController@productUpdate')->name('supplier.productUpdate');
    Route::post('/product/delete/{id}', 'productController@productDelete')->name('supplier.product.delete');
    Route::get('/order' , 'SupplierController@order')->name('supplier.order');
    Route::get('/orderShow/{id}', 'SupplierController@orderShow')->name('supplier.orderShow');
    Route::post('/cancelOrder/{id}', 'SupplierController@cancelOrder')->name('supplier.cancelOrder');
    Route::post('/completeOrder/{id}', 'SupplierController@completeOrder')->name('supplier.completeOrder');
    Route::get('/account', 'SupplierController@account')->name('supplier.account');
    
    });
