<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontend;
use App\Http\Controllers\Backend\Backend;
use App\Http\Controllers\Backend\ControllerProduct;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;

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
Route::get('/editproduct/{id}', [ControllerProduct::class, 'edit'])->name('editproduct');
Route::post('/updateproduct/{id}', [ControllerProduct::class, 'update'])->name('updateproduct');

// for Category CRUD 
Route::get('/managecategory', [CategoryController::class, 'index'])->name('managecategory');
Route::post('/addcategory', [CategoryController::class, 'store']);
Route::get('/showcategory', [CategoryController::class, 'show']);
Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy']);
Route::get('/activecategory/{id}', [CategoryController::class, 'active']);
Route::get('/inactivecategory/{id}', [CategoryController::class, 'inactive']);
Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
Route::post('/updatecategory/{id}', [CategoryController::class, 'update']);

// for Brand CRUD 
Route::get('/addbrand', [BrandController::class, 'index'])->name('addbrand');
Route::post('/storebrand', [BrandController::class, 'store'])->name('storebrand');
Route::get('/showbrand', [BrandController::class, 'show'])->name('showbrand');
Route::get('/viewbrand/{id}', [BrandController::class, 'view'])->name('viewbrand');