<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post',[PostController::class, 'index'])->name('post.index');
// Route::post('/post', [PostController::class, 'store'])->name('post.store')
//     ->middleware(CheckRoleMiddleware::class);


/**
 * route groups
 */
// Route::get('/post',[PostController::class, 'index'])->name('post.index');
// Route::group(['middleware'=>CheckRoleMiddleware::class], function() {
//     Route::post('/post', [PostController::class, 'store'])->name('post.store');
// });


//from middleware group
// Route::get('/post',[PostController::class, 'index'])->name('post.index')->middleware('test-group');

Route::get('/post',[PostController::class, 'index'])->name('post.index');
Route::post('/post', [PostController::class, 'store'])->name('post.store');


/**
 * middlware with parameters
 */
Route::get('user/dashboard', function() {
    dd('user dashboard');
})->middleware('checkRole:user');

Route::get('admin/dashboard', function() {
    dd('admin dashboard');
})->middleware('checkRole:admin');

