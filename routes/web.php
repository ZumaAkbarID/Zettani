<?php

use App\Http\Controllers\Apk\ApkCheckout;
use App\Http\Controllers\Apk\ApkIndex;
use App\Http\Controllers\Apk\ApkSingle;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\Toko\TokoIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing
Route::get('/', [LandingPage::class, 'index'])->name('Landing_Page');

// Toko
Route::group(['prefix' => '/toko'], function () {
    Route::get('/', [TokoIndex::class, 'index'])->name('Toko_Index');
});

// APK
Route::group(['prefix' => '/apk'], function () {
    Route::get('/', [ApkIndex::class, 'index'])->name('Apk_Index');

    // Demo single
    Route::get('single', [ApkSingle::class, 'index'])->name('Apk_Single');
    Route::post('checkout', [ApkCheckout::class, 'process'])->name('Apk_Checkout');
});
