<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace' => 'web'], function(){


    Route::get('customer', function () {
        return view(VIEW_FILE_NAMES['frontend_profile']);
    })->name('frontend.login');

    Route::get('/login', function () {
        return view(VIEW_FILE_NAMES['frontend_login']);
    })->name('frontend.login');

    Route::get('/register', function () {
        return view(VIEW_FILE_NAMES['frontend_register']);
    })->name('frontend.register');

    Route::get('/cart', function () {
        return view(VIEW_FILE_NAMES['frontend_cart']);
    })->name('frontend.cart');

    Route::get('/checkout', function () {
        return view(VIEW_FILE_NAMES['frontend_checkout']);
    })->name('frontend.checkout');

    Route::get('/contact', function () {
        return view(VIEW_FILE_NAMES['frontend_contact']);
    })->name('frontend.contact');

    Route::get('/compare', function () {
        return view(VIEW_FILE_NAMES['frontend_compare']);
    })->name('frontend.compare');

    Route::get('/faq', function () {
        return view(VIEW_FILE_NAMES['frontend_faq']);
    })->name('frontend.faq');

    Route::get('/terms-condition', function () {
        return view(VIEW_FILE_NAMES['frontend_terms_condition']);
    })->name('frontend.terms-condition');

    Route::get('/privacy-policy', function () {
        return view(VIEW_FILE_NAMES['frontend_privacy_policy']);
    })->name('frontend.privacy-policy');

    Route::get('/about-us', function () {
        return view(VIEW_FILE_NAMES['frontend_about_us']);
    })->name('frontend.about-us');

});

Route::get('/dashboard', function () {
    return view('backend.index');
})->name('backend.index')->middleware('auth');
