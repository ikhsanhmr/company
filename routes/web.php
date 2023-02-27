<?php


use App\Http\Controllers\UserController;
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
/*

*/



Route::get('/', function () {
    return view('frontend.template', ['title' => 'Halaman Frontend']);
})->name('template');

Route::get('/dashboard', function () {
    return view('backend.home', ['title' => 'Home']);
})->name('home');

Route::get('/admin', function () {
    return view('backend.login', ['title' => 'Login']);
})->name('login');

Route::get('about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
