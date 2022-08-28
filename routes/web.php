<?php

use App\http\controllers\ProductController;
use App\http\controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Home
Route::get('/', [HomeController::class, "index"])->name('home');


//Product
Route::prefix('/product')->group(function(){
    Route::get('/', [ProductController::class, "index"])->name('product');
    Route::post('/store', [ProductController::class, "store"])->name('products.store');
    Route::get('/{task_id}/delete',[ProductController::class, "delete"])->name('products.delete');
    Route::get('/{task_id}/active',[ProductController::class, "active"])->name('products.status');
    Route::get('/{task_id}/inactive',[ProductController::class, "inactive"])->name('products.inactive');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
