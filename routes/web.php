<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Superadmin\UserManagementController;

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

Route::get('/',[HomeController::class, 'homepage']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page',[AdminController::class, 'post_page']);

Route::get('/post_page',[AdminController::class, 'post_page']);

Route::post('/add_post',[AdminController::class, 'add_post']);

Route::get('/show_post',[AdminController::class, 'show_post']);

Route::get('/delete_post/{id}',[AdminController::class, 'delete_post']);

Route::get('/edit_page/{id}',[AdminController::class, 'edit_page']);

Route::post('/update_post/{id}',[AdminController::class, 'update_post']);

Route::get('/post_details/{id}',[HomeController::class, 'post_details']);

Route::get('/users_index',[SuperAdminController::class, 'users_index']);

Route::get('/create',[UserManagementController::class, 'create']);

Route::get('/update',[UserManagementController::class, 'update']);

Route::get('/contact_us',[HomeController::class, 'contact_us']);

Route::middleware(['auth', 'superadmin'])->prefix('superadmin')->name('superadmin.')->group(function () {
    Route::resource('users', \App\Http\Controllers\Superadmin\UserManagementController::class);
});


