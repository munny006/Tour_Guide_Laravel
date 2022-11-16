<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DeshboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
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
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//admin//////////

Route::group(['prefix' => 'admin'], function(){

	Route::get('dashboard',[App\Http\Controllers\Admin\DeshboardController::class, 'index'])->name('admin.dashboard');

	Route::GET('users',[App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.users.index');

	Route::PUT('users/{id}',[App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');

	Route::POST('users/{id}',[App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin.user.destroy');


	//category

	Route::GET('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category.index');


	Route::POST('category',[App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin.category.store');


});
	




///user

// Route::group(['prefix' =>'user','as' =>'user.' ,'namespace'=>'User','middleware'=>['auth','user']],function(){
// 	// Route::get('dashboard','DashboardController@index')->name('dashboard');
// 	Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');	
// });

Route::group(['prefix' => 'user'], function(){
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
});


