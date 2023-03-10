<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::middleware('auth', 'role:admin')
    ->name('admin.')
    ->prefix('/admin')
    ->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::post('/roles/{role}/permissions', [\App\Http\Controllers\Admin\RoleController::class, 'assignPermissions'])->name('roles.permissions');
    Route::resource('/roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('/permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class);
});

require __DIR__.'/auth.php';
