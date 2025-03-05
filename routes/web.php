<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Livewire\Categorie;
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



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/products', [ProductController::class, 'index'])->middleware(['auth'])->name('products');
Route::get('/users', [UserController::class, 'index'])->middleware(['auth'])->name('users');
Route::get('/categorie', [CategorieController::class, 'index'])->middleware(['auth'])->name('categorie');
Route::get('/catupdate/{id}', [CategorieController::class, 'edit'])->name('catupdate/{id}');
Route::post('/updatecategorie', [CategorieController::class, 'update'])->name('updatecategorie');
Route::resource('CategorieController', 'CategorieController');
Route::delete('deleteCategorie/{id}', [CategorieController::class,'delete'])->name('deleteCategorie');

Route::get('/', [ProductController::class, 'showAll'])->name('products.showAll');
// Route::get('/welcome/{product}', [ProductController::class, 'show'])->name('products.show');



Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');




require __DIR__ . '/auth.php';
