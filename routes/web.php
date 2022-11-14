<?php

    use App\Http\Controllers\ProductController;
    use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});

// Them 1 san pham
Route::get('/admin/products/create', [ProductController::class,'create']);

Route::post('/admin/products/create', [ProductController::class,'save']);

// Xem toan bo san pham
Route::get('/admin/products', [ProductController::class,'index']) ->name('home');

// Xem 1 san pham
Route::get('/admin/products/{id}', [ProductController::class,'show']);


// Sua 1 san pham
Route::get('/admin/products/{id}/edit', [ProductController::class,'edit']);
// Xu ly update - ko co giao dien
Route::put('/admin/products/{id}/edit', [ProductController::class,'update']);

// Xoa
Route::delete('/admin/products/{id}/delete', [ProductController::class, 'delete']);
