<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontend;
use App\Http\Controllers\Backend\Backend;
use App\Http\Controllers\Backend\ControllerProduct;

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
// for Frontend 
Route::get('/', [Frontend::class, 'index'])->name('home');

// for Backend 
Route::get('/dashboard', [Backend::class, 'index'])->name('dashboard');



// for Product CRUD 
Route::get('/addproduct', [ControllerProduct::class, 'index'])->name('addproduct');
Route::post('/insertproduct', [ControllerProduct::class, 'insert'])->name('insertproduct');
Route::get('/showproduct', [ControllerProduct::class, 'show'])->name('showproduct');
Route::get('/activeproduct/{id}', [ControllerProduct::class, 'active'])->name('activeproduct');
Route::get('/inactiveproduct/{id}', [ControllerProduct::class, 'inactive'])->name('inactiveproduct');
Route::get('/deleteproduct/{id}', [ControllerProduct::class, 'delete'])->name('deleteproduct');