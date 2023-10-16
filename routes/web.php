<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login-form', [ViewController::class, 'login_form']);
Route::get('home-page', [ViewController::class, 'home_page']);
Route::get('contact-page', [ViewController::class, 'contact_page']);
Route::get('add-product-page', [ViewController::class, 'add_product_page']);
Route::get('buy-product-page', [ViewController::class, 'buy_product_page']);


// signup and signin data crud
Route::post('signup-data', [CrudController::class, 'signup_data'])->name('signup.data');
Route::post('signin-data', [SigninController::class, 'signin_data'])->name('signin.data');
Route::get('/logout', [SigninController::class, 'logout'])->name('logout');

