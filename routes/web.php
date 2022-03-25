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

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@main');

Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/lender', 'Auth\LoginController@showLenerLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/lender', 'Auth\RegisterController@showLenderRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/lender', 'Auth\LoginController@lenderLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/lender', 'Auth\RegisterController@createLender');

    // Route::get('/home', 'home')->middleware('auth');
    Route::get('/home', 'Auth\LoginController@mainIndex');

    Route::get('/admin', 'Auth\LoginController@adminIndex');
    Route::get('/lender', 'Auth\LoginController@lenderIndex');
    // Route::get('/admin', 'admin');
    // Route::get('/lender', 'lender');


Route::get('/logout/admin',[
        'uses'=>'Auth\LoginController@getLogout',
        'as'=>'admin.logout'
]); 

Route::post('/lender/upload',[
    'uses'=>'LenderControntoller@uploadPost',
    'as'=>'lender.upload'
]); 

Route::get('/lender/showproduct',[
    'uses'=>'LenderControntoller@showproduct',
    'as'=>'lender.showproduct'
]); 


//admin controller

Route::get('/admin/giveaccess',[
    'uses'=>'AdminController@giveAccess',
    'as'=>'admin.giveAccess'
]); 


Route::get('/admin/showLender',[
    'uses'=>'AdminController@showLender',
    'as'=>'admin.showLender'
]); 

Route::get('/home', 'HomeController@index')->name('home');
