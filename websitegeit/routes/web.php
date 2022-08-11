<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/Admin-Home', [AdminController::class, 'indexAdmin'])->name('Admin-Home');
Route::get('/data-table', [AdminController::class, 'dataTable'])->name('data-table');
Route::get('/add', [AdminController::class, 'categoryShow'])->name('add');
Route::post('/save', [AdminController::class, 'addData'])->name('save');
Route::get('delete/{id}', [AdminController::class, 'delete']);
Route::get('getInfo/{id}', [AdminController::class, 'getInfo']);
Route::post('update', [AdminController::class, 'update']);
