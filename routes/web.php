<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

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
Route::get('/', function () {
	return view('login');
});




// Route::get('/', [ProductController::class,"index"])->name('products.index');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{product}/edit', [ProductController ::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController:: class,"update"])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, "destroy"])->name('products.destroy');


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');



Route::get('/home', [HomeController ::class,"home"])->name('home');
Route::post('/order', [orderController::class,"order"])->name('order');
Route::post('/order/submit', [OrderController ::class,"submit"])->name('order.submit');

Route::get('/order/success', function () {
    return view('order_success');
})->name('order.success');


