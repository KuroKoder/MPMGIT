<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\DashKonsulController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashTestimoniController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

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
Route::get('/artikel', [PostController::class, 'index']);
Route::get('/artikel/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', [PostController::class,'categorypost']);
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'store']);
Route::get('/testimoni', [TestimoniController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::post('/artikel/{post:slug}', [KomenController::class, 'store'])->name('komen.store');;

//Akses hanya untuk admin dan author
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:admin'|'role:author'], function(){
        Route::resource('/dashboard/posts', DashboardPostController::class);
        Route::get('/dashboard/checkSlug', [DashboardPostController::class, 'checkSlug']);
        Route::resource('/dashboard/konsultasis', DashKonsulController::class);
        Route::get('/dashboard', [DashboardController::class,'index']);
        
        
    });
});

//Akses hanya untuk admin
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'isadmin'], function()
    {
        Route::resource('/dashboard/testimonis', DashTestimoniController::class);
        Route::get('/dashboard/makeSlug', [DashTestimoniController::class, 'makeSlug']);
        Route::get('/dashboard/users', [UserController::class, 'index']);
        Route::post('/dashboard/users', [UserController::class, 'store']);
        Route::get('/dashboard/users/{user:id}', [UserController::class, 'edit']);
        Route::delete('/dashboard/users/{user:id}', [UserController::class, 'destroy']);
        Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show', 'edit', 'update', 'destroy', 'cekSlug']);
        Route::delete('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'destroy']);
        Route::get('/dashboard/categories/{category:slug}/edit', [AdminCategoryController::class, 'edit']);
        Route::post('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'update']);
        Route::get('/dashboard/categories/cekSlug', [AdminCategoryController::class, 'cekSlug']);
    });
});