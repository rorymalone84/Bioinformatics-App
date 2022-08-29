<?php

use App\Http\Controllers\Admin\UserController;
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

//basic/all

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/users', [UserController::class, 'index'])->name('users.index')->middleware(['auth']);

Route::get('/dataModels', function () {
    return view('dataModels.index');
})->middleware(['auth'])->name('dataModels.index');

//doctor

Route::get('/doctors/DMindex', function () {
    return view('doctors.DMindex');
})->middleware(['auth'])->name('doctors.DMindex');

//admin

Route::get('/admin/content', function () {
    return view('admin.content');
})->middleware(['auth'])->name('admin.content');

Route::get('/admin/permitMenu', function () {
    return view('admin.permits');
})->middleware(['auth','role:admin'])->name('admin.permits');

Route::get('/admin/playground', function () {
    return view('admin.playground');
})->middleware(['auth'])->name('admin.playground');

require __DIR__.'/auth.php';
