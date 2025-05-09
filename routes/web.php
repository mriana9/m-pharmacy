<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;
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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/', function () {
//     return view('welcome'); 
// });

Route::get('/', [ProductController::class, 'showProducts']);



Route::get('/about', function () {
    $products = Product::latest()->take(4)->get(); 
    return view('about', compact('products'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

//Route::get('/product', [ProductController::class, 'index'])->name('product.index');


Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product.details');


//Route::post('/products', [OrderController::class, 'store'])->name('orders.store');
