<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Session\CartController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('information.home');
})->name('homeLanding');


Route::get('/services',function(){
return view('information.service');
})->name('servicePage');

Route::get('/service-order', function() {
    return view('information.orderService');
})->name('serviceOrder');

Route::get('/checkout',function(){
    return view('information.checkOut');
});
Route::get('/checkout-confirm',function(){
    return view('information.confirmCheckOut');
})->name('checkOutConfirm');

Route::get('/pricing',function(){
    return view('information.price');
})->name('pricing');

Route::get('/contact-us', function () {
    return view('information.contact');
})->name('contactUs');

Route::get('/about-us', function () {
    return view('information.about');
})->name('aboutUs');

Route::get('/my-profile',[AuthController::class,'userPage'])->name('userPage');
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('loginPost');
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/check-out',[CartController::class,'showCart'])->name('login');



Route::get('/check-out',[CartController::class,'showCart'])->name('checkOut');
Route::post('/check-out', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/cart/add', [CartController::class, 'addQuantity'])->name('cart.add');
Route::post('/cart/subtract', [CartController::class, 'subtractQuantity'])->name('cart.subtract');
//address of delivery
// Route::post('/addresses', [CartController::class, 'addAddressOfDelivery'])->name('addAddressOfDelivery');
// Route::put('/addresses/{addressId}', [CartController::class, 'updateAddressOfDelivery'])->name('updateAddressOfDelivery');
// Route::delete('/addresses/{addressId}', [CartController::class, 'deleteAddressOfDelivery'])->name('deleteAddressOfDelivery');


Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');


Route::post('/place-order', [OrderController::class, 'placeOrder']);  //->middleware('auth')

Route::middleware('auth')->group(function () {
    Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');
    Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
    Route::patch('/addresses/{address}', [AddressController::class, 'update'])->name('addresses.update');
    Route::patch('/addresses/{address}/set-default', [AddressController::class, 'setDefault'])->name('addresses.setDefault');
    Route::delete('/addresses/{address}', [AddressController::class, 'destroy'])->name('addresses.destroy');
});


    Route::get('/admin/view-orders', [AdminController::class,'viewOrder'])->name('list-order');

    Route::get('/admin/view-inquiries',[AdminController::class,'viewInquiry'])->name('view-inquiries');

    Route::post('/admin/view-orders/description',[AdminController::class,'detailDescription'])->name('view-order-description');
