<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/tShirts', function () {
    return view('tShirts');
})->name('tShirts');

Route::get('/trousers', function () {
    return view('trousers');
})->name('trousers');

Route::get('/shoes', function () {
    return view('shoes');
})->name('shoes');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

use App\Http\Controllers\ProductController;

Route::get('/tShirts', [ProductController::class, 'showTShirts'])->name('tShirts');



// Shoes and trousers

Route::get('/trousers', [ProductController::class, 'showTrousers'])->name('trousers');
Route::get('/shoes', [ProductController::class, 'showShoes'])->name('shoes');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');