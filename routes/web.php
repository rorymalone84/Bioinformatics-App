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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users')->middleware(['auth']);

Route::get('/admin/dataModels', function () {
    return view('admin.dataModels');
})->middleware(['auth'])->name('admin.dataModels');

Route::get('/admin/content', function () {
    return view('admin.content');
})->middleware(['auth'])->name('admin.content');

Route::get('/admin/playground', function () {
    return view('admin.playground');
})->middleware(['auth'])->name('admin.playground');

require __DIR__.'/auth.php';
