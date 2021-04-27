<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//GET untuk mendapatkan user tapi dengan menggunakan id 
Route::get('user/{id}', [UserController::class, 'getUserById']);

//Get untuk mendapatkan semua user 
Route::get('users', [UserController::class, 'getAllUsers']);

//POST untuk menambahkan data user
Route::post('users', [UserController::class, 'createUser']);

//POST untuk update data user
Route::post('user/{id}', [UserController::class, 'updateUser']);

//POST untuk menambahkan profile
Route::post('users/photo/{id}', [UserController::class, 'addPhotoProfile']);

//GET untuk mendapatkan data telepon
Route::get('users/{user_id}/phone', [PhoneController::class, 'getAllPhone']);

//POST untuk menambahkan data telepon
Route::post('users/{user_id}/phone', [PhoneController::class, 'createPhone']);

//DELETE unutk menghapus data telepon
Route::delete('users/{user_id}/phone/{id}', [PhoneController::class, 'deletePhone']);
