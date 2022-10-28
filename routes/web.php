<?php

use Illuminate\Support\Facades\Route;

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

	Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']);
	Route::get('users.$user->id',[App\Http\Controllers\Admin\UserController::class,'update']);
	//Route::resource('user',[App\Http\Controllers\Admin\UserController::class,'index']);
});



///user

// Route::group(['prefix' =>'user','as' =>'user.' ,'namespace'=>'User','middleware'=>['auth','user']],function(){
// 	// Route::get('dashboard','DashboardController@index')->name('dashboard');
// 	Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');	
// });

Route::group(['prefix' => 'user'], function(){
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
});