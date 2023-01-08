<?php

use App\Models\food;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foodController;
use App\Http\Controllers\UserController;


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
// index
Route::get('/', function () {
    return view('index');
});

// admin page
Route::get('/admin/index', [foodController::class, 'admin']);

// create page
Route::get('/admin/create', [foodController::class, 'create']);

//show edit page
Route::get('/admin/edit/{food}', [foodController::class, 'showEdit']);

// store menu data
Route::post('/create', [foodController::class, 'store']);

// store edited data
Route::put('/admin/update/{food}', [foodController::class, 'storeEdit']);

// // store edited data from user reservation
// Route::put('/admin/update/{food}', [foodController::class, 'storeEdit']);

// delete data
Route::delete('/admin/delete/{food}', [foodController::class, 'delete']);

// all menu
Route::get('/menu', [foodController::class, 'food']);

// reservation
Route::get('/reservation', [foodController::class, 'reservation']);

//store reservation
Route::post('/store/reservation', [foodController::class, 'storeReservation']);

// admin reservation
Route::get('/admin/reservation', [foodController::class, 'adminReservation']);

// admin register
Route::get('/admin/register', [UserController::class, 'register']);

// Store admin register
Route::post('/store/register', [UserController::class, 'storeRegister']);

// admin login
Route::get('/admin/login', [UserController::class, 'login']);

// admin logout
Route::post('/logout', [UserController::class, 'logout']);

// admin login
Route::get('/admin/login', [UserController::class, 'login']);

// log in user
Route::post('/store/login', [UserController::class, 'storeLogin']);

// single menu
Route::get('/meal/{id}', [foodController::class, 'meal']);


Route::get('/fetch', [UserController::class, 'fetch']);
