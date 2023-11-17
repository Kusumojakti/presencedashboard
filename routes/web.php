<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\UIDController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/murid', function () {
//     return view('tables');
// });

// Route::get('/invalid', function () {
//     return view('invalid');
// });


// Route::get('/registermurid', function () {
//     return view('registermurid');
// });

Route::middleware('logincheck')->group(function(){
    Route::get('/', [homeController::class, 'index']);
    Route::get('/daftar',[MuridController::class, 'index']);

    Route::get('/registermurid', [MuridController::class, 'regist']);
    Route::post('/registerMurid', [MuridController::class, 'create']);
    Route::delete('/{id}', [MuridController::class, 'destroy']);

    Route::get('/uid', [UIDController::class, 'index']);
    Route::get('/registeruid', [UIDController::class, 'showregister']);
    Route::post('/createuid', [UIDController::class, 'create']);
});

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/cekLogin', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/createUser', [UserController::class, 'create']);
