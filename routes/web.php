<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/checkout', [CheckoutController::class, 'checkout']);
// Route::get('checkout','CheckoutController@checkout');
Route::post('checkout',[CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');
// Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');