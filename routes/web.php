<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;

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

//basic/all

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/playground', function () {
    return view('playground');
})->middleware(['auth'])->name('playground');

Route::get('/dataModels', function () {
    return view('dataModels.index');
})->middleware(['auth'])->name('dataModels.index');


//admin role routes
Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    
    Route::get('/permitMenu', function () {
        return view('admin.permits');
    })->name('permits');

    Route::get('/content', function () {
        return view('admin.content');
    })->name('content');

    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
});

//doctor role routes
Route::middleware(['auth', 'role:doctor'])->name('doctor.')->prefix('doctor')->group(function(){
    Route::get('/DMindex', function () {
        return view('doctors.DMindex');
    })->name('DMindex');    
});

require __DIR__.'/auth.php';
