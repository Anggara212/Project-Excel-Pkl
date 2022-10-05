<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\LoginController;
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
    return view('login.login');
})->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home');

//santri
Route::get('/santri', [SantriController::class,'index'])->name('santri');

Route::get('/tambahSantri', [SantriController::class,'tambahSantri'])->name('tambahSantri');

Route::post('/insertsantri', [SantriController::class,'store'])->name('insertsantri');

Route::get('/tampilandata/{id}', [SantriController::class,'tampilandata'])->name('tampilandata');

Route::put('/updatedata/{id}', [SantriController::class,'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [SantriController::class,'destroy'])->name('deletedata');
//end santri

// santri export

Route::get('Santri/export/', [SantriController::class, 'export']);

// end santri export

// login

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// end login

// auth

Route::group(['middleware' => ['auth','checkrole:admin']],function () {
    Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
    Route::get('user', function () { return view('user'); })->middleware(['checkRole:user,admin']);
});