<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SigninController;

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

// welcome file
Route::get('/', function () {
    return view('welcome');
});

// View Data Routes start here
Route::get('login-form',            [ViewController::class, 'loginForm'])->name('login');
Route::get('home-page',             [ViewController::class, 'homePage']);
Route::get('contact-page',          [ViewController::class, 'contactPage']);
Route::get('add-product-page/{id}', [ViewController::class, 'addProductPage']);
// Route::get('buy-product-page', [ViewController::class, 'buyProductPage']);
Route::get('buy-product-page/{id}', [ViewController::class, 'buyProductPage']);


// signup and signin data crud Routes
Route::post('signup-data', [SignupController::class, 'signupData'])->name('signup.data');
Route::post('signin-data', [SigninController::class, 'signinData'])->name('signin.data');
Route::get('/logout',      [SigninController::class, 'logout'])->name('logout');

// contact data route
Route::post('contact-data', [ContactController::class, 'contactData'])->name('contact.data');

// cart data route
Route::post('cart-data', [CartController::class, 'cartData'])->name('cart.data');


