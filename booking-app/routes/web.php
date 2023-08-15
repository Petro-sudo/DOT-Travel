<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthContoller;

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


Route::get('/login', [CustomAuthContoller::class, 'login'])->name('login');
Route::get('/dashboard', [CustomAuthContoller::class, 'dashboard'])->name('dashboard');
Route::get('/registration', [CustomAuthContoller::class, 'registration'])->name('registration');
Route::post('/registration-form', [CustomAuthContoller::class, 'registrationForm'])->name('registration-form');
Route::post('login-user', [CustomAuthContoller::class, 'loginUser'])->name('login-user');


//Travel Orders

Route::get('/travel', [CustomAuthContoller::class, 'order'])->name('travel');
Route::post('/travel-Order', [CustomAuthContoller::class, 'travelOrder'])->name('travel-Order');
Route::get('/logout', [CustomAuthContoller::class, 'logout'])->name('logout');
Route::get('/order/{orders}/edit', [CustomAuthContoller::class, 'edit'])->name('editorders');
Route::put('/order/{orders}/update', [CustomAuthContoller::class, 'updateOrder'])->name('updateorders');
Route::get('/search', [CustomAuthContoller::class, 'search'])->name('searchorders');