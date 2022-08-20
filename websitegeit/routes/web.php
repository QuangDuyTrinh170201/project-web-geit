<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/login-adm', [AdminController::class, 'loginAdm'])->middleware('alreadyLoggedInAdmin');
Route::post('login-admin', [AdminController::class, 'loginAdmin'])->name('login-admin');
Route::get('/Admin-Home', [AdminController::class, 'indexAdmin'])->middleware('isLoggedInAdmin');
Route::get('/logoutAdm', [AdminController::class, 'logoutAdmin']);
Route::get('/data-table', [AdminController::class, 'dataTable'])->name('data-table');
Route::get('/data-category', [AdminController::class, 'dataCat'])->name('data-category');
Route::get('/add', [AdminController::class, 'categoryShow'])->name('add');
Route::post('/save', [AdminController::class, 'addData'])->name('save');
Route::get('/add-Category', [AdminController::class, 'addCat']);
Route::post('/saveCategory', [AdminController::class, 'saveCate']);
Route::get('delete/{id}', [AdminController::class, 'delete']);
Route::get('getInfo/{id}', [AdminController::class, 'getInfo']);
Route::post('update', [AdminController::class, 'update']);
Route::get('deleteCategory/{id}', [AdminController::class, 'deleteCate']);
Route::get('getInfoCategory/{id}', [AdminController::class, 'getInfoCate']);
Route::post('updateCategory', [AdminController::class, 'updateCategory']);


//Login-Signup
Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [AuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [AuthController::class, 'logOut']);


//xu ly product va single product
Route::get('product',[Productcontroller::class, 'index']);
Route::get('/category/{id}',[Productcontroller::class, 'category'])->name('category_product');
Route::get('singleProduct/{id}', [Productcontroller::class, 'details']);
