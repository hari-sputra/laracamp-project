<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;

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

Route::get('/', [HomeController::class, 'index']);

// sociallite
Route::get('google-login', [UserController::class, 'google'])->name('google.login');
Route::get('auth/google/callback', [UserController::class, 'googleCallback'])->name('google.login.callback');

Route::middleware(['auth'])->group(function () {

    // checkout
    Route::get('/success-checkout', [CheckoutController::class, 'success_checkout'])->name('checkout.success');
    Route::get('/checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout');
    Route::post('/checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

    // dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});
require __DIR__ . '/auth.php';
