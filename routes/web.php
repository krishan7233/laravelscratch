<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userlogin_controller;
use App\Http\Controllers\Dashboard_controller;
use App\Http\Controllers\Admin_dashborad;

Route::get('/', [Userlogin_controller::class, 'index'])->name('login');

Route::post('/authlogin', [Userlogin_controller::class, 'authcheck'])->name('authLogin');

Route::group(['middleware' => \App\Http\Middleware\Authenticate::class], function () {
    Route::get('/userlogout',[Dashboard_controller::class, 'userlogout']);
    Route::get('/dashboard', [Dashboard_controller::class,'dashboard'])->name('dashboard');
});

Route::group(['middleware' => ['isAdmin']], function () { 
    Route::get('/admin_dashboard',[Admin_dashborad::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/addproduct',[Admin_dashborad::class, 'addproduct'])->name('addproduct');
    Route::get('/productlist',[Admin_dashborad::class, 'productlist'])->name('productlist');
    Route::get('/adduser',[Admin_dashborad::class, 'adduser'])->name('adduser');
    Route::get('/userlist',[Admin_dashborad::class, 'userlist'])->name('userlist');
    Route::post('saveproductdata',[Admin_dashborad::class,'saveproductdata']);
    Route::post('createuser',[Admin_dashborad::class,'createuser']);
    Route::get('deleteproduct/{id}',[Admin_dashborad::class,'deleteproduct']);
    Route::get('deleteuser/{id}',[Admin_dashborad::class,'deleteuser']);
    Route::get('edituser/{id}',[Admin_dashborad::class,'edituser']);
    Route::post('updateuserdata',[Admin_dashborad::class,'updateuserdata'])->name('updateuserdata');
    Route::get('editproduct/{id}',[Admin_dashborad::class,'editproduct']);
    Route::post('updateproductdata',[Admin_dashborad::class,'updateproductdata'])->name('updateproductdata');
    Route::get('/adminlogout',[Admin_dashborad::class, 'adminlogout']);
    Route::get('/profile',[Admin_dashborad::class,'profile'])->name('profile');
    Route::get('/profileform',[Admin_dashborad::class,'profileform']);
    Route::post('updateprofiledata',[Admin_dashborad::class,'updateprofiledata'])->name('updateprofiledata');
    
});

