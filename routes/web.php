<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/profile', [ProfileController::class, 'profile']);
//Route::get('/profile/{nama}', [ProfileController::class, 'profile']);
Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/upload', [ImageUploadController::class, 'create']);
Route::post('/upload', [ImageUploadController::class, 'store']);
Route::get('/user/create', [UserController::class, 
'create']); 
Route::post('/user/store', [UserController::class, 
'store'])->name('user.store'); 

