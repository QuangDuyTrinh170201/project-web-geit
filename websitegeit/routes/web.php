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
//admin routes
Route::get('/login-adm', [AdminController::class, 'loginAdm'])->middleware('alreadyLoggedInAdmin');
Route::post('login-admin', [AdminController::class, 'loginAdmin'])->name('login-admin');
Route::get('/Admin-Home', [AdminController::class, 'indexAdmin'])->middleware('isLoggedInAdmin');
Route::get('/logoutAdm', [AdminController::class, 'logoutAdmin']);

Route::get('/data-table', [AdminController::class, 'dataTable'])->name('data-table');
Route::get('/add', [AdminController::class, 'categoryShow'])->name('add');
Route::post('/save', [AdminController::class, 'addData'])->name('save');
Route::post('/saveCategory', [AdminController::class, 'saveCate']);
Route::get('delete/{id}', [AdminController::class, 'delete']);
Route::get('getInfo/{id}', [AdminController::class, 'getInfo']);
Route::post('update', [AdminController::class, 'update']);
//admin category management
Route::get('/data-category', [AdminController::class, 'dataCat'])->name('data-category');
Route::get('/add-Category', [AdminController::class, 'addCat']);
Route::get('deleteCategory/{id}', [AdminController::class, 'deleteCate']);
Route::get('getInfoCategory/{id}', [AdminController::class, 'getInfoCate']);
Route::post('updateCategory', [AdminController::class, 'updateCategory']);
//Customer Management
Route::get('/data-customer', [AdminController::class, 'indexCustomer'])->name('data-customer');
Route::get('deleteCustomer/{id}', [AdminController::class, 'deleteCustomer']);
Route::get('edit-profile/{id}', [FrontendController::class, 'getInfoCustomer']);
Route::post('updateCustomer', [FrontendController::class, 'updateCustomer']);
//review management
Route::get('/data-review', [AdminController::class, 'dataReview'])->name('data-review');
Route::post('/saveReview', [FrontendController::class, 'addReview']);
Route::get('deleteReview/{id}', [AdminController::class, 'deleteReview']);

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

//frontend routes
Route::get('about-us', [FrontendController::class, 'abtUs']);
Route::get('contact-us', [FrontendController::class, 'contact']);


