<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect',[HomeController::class,'redirect']);


// Admin==============

route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/updat_product/{id}',[AdminController::class,'updat_product']);
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);




// HOME==============

route::get('/products',[HomeController::class,'products']);
route::any('/add_to_cart/{id}',[HomeController::class,'add_to_cart']);
route::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/remove_card/{id}',[HomeController::class,'remove_card']);
route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);
route::get('/contact',[HomeController::class,'contact']);


