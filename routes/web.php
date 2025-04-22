<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
Route::get('link', function () {Artisan::call('storage:link');});

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/home', function () { return view('welcome');})->name('home');
Route::get('/', function () {
    $products = Product::latest()->take(8)->get(); 
    return view('welcome', compact('products'));
});


Route::get('/about', function () {
    $products = Product::latest()->take(4)->get(); 
    return view('about', compact('products'));
});

Route::get('/contact', function () {
    return view('contact'); // or whatever your contact view is
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
