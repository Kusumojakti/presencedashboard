<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UIDController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user',[UserController::class,'index']);

Route::get('murid',[MuridController::class,'index']);
Route::post('murid',[MuridController::class,'store']);

Route::get('user/{id}',[UserController::class,'show']);
Route::post('user',[UserController::class,'store']);

Route::get('roles',[RolesController::class,'index']);
Route::post('roles',[RolesController::class,'store']);

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/cekLogin', [UserController::class, 'login']);
Route::get('/', [homeController::class, 'index']);

Route::get('/uid', [UIDController::class, 'uidlist']);
Route::post('/uidregist', [UIDController::class, 'create']);