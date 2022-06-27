<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhoneController;

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
// Route::get('/', function () {
//     return view('mypractice');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/noaccess', function () {
    return view('noaccess');
});

Route::resource('products', ProductController::class)->middleware ('auth');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/signIn', [AuthController::class, 'signIn'])->name('signIn');
Route::post('signUp', [AuthController::class, 'signUp'])->name('signUp');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/add-phone', [PhoneController::class, 'showAddPhone']);
Route::post('/add-phone', [PhoneController::class, 'addPhone'])->name('addPhone');
Route::get('/user/my-phone', [PhoneController::class, 'showPhone'])->name('showPhone');
