<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DeshboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CommentReplyController;
use Illuminate\Support\Facades\view;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;

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

//Route::get('/', function () {
    //return view('welcome');
//});



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\HomeController::class, 'posts'])->name('posts');

Route::get('/post/{slug}', [App\Http\Controllers\HomeController::class, 'post'])->name('post');
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories'])->name('categories');

Route::get('/category/{slug}', [App\Http\Controllers\HomeController::class, 'categoryPost'])->name('category.post');


Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::get('/tag/{name}', [App\Http\Controllers\HomeController::class, 'tagPosts'])->name('tag.posts');


Route::POST('/comment/{post}',[App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');

//comment reply

Route::POST('/comment-reply/{comment}',[App\Http\Controllers\CommentReplyController::class, 'store'])->name('reply.store');

//Route::get('/category/{slug}', [App\Http\Controllers\HomeController::class, 'categoryPost'])->name('category.post');

//admin//////////

Route::group(['prefix' => 'admin'], function(){

	Route::get('dashboard',[App\Http\Controllers\Admin\DeshboardController::class, 'index'])->name('admin.dashboard');

	Route::get('profile',[App\Http\Controllers\Admin\DeshboardController::class, 'showProfile'])->name('admin.profile');
	Route::PUT('profile',[App\Http\Controllers\Admin\DeshboardController::class, 'updateProfile'])->name('admin.profile.update');
Route::PUT('profile/password',[App\Http\Controllers\Admin\DeshboardController::class, 'changePassword'])->name('admin.profile.password');

	Route::GET('users',[App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.users.index');

	Route::PUT('users/{id}',[App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');

	Route::POST('users/{id}',[App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin.user.destroy');

	Route::GET('/comments',[App\Http\Controllers\Admin\CommentController::class,'index'])->name('admin.comments.index');




	Route::POST('comment/{id}',[App\Http\Controllers\Admin\CommentController::class,'delete'])->name('admin.comment.delete');


	Route::GET('/reply-comment',[App\Http\Controllers\Admin\CommentReplyController::class,'index'])->name('admin.comment-reply.index');

	Route::POST('reply/comment/{id}',[App\Http\Controllers\Admin\CommentReplyController::class,'delete'])->name('admin.comment-Reply.delete');



	//category

	Route::GET('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category.index');


	Route::POST('category',[App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin.category.store');

	Route::PUT('category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin.category.update');

	Route::POST('category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin.category.destroy');

///

	Route::GET('post',[App\Http\Controllers\Admin\PostController::class,'index'])->name('admin.post.index');
	Route::GET('post/create',[App\Http\Controllers\Admin\PostController::class,'create'])->name('admin.post.create');
		Route::POST('post/create',[App\Http\Controllers\Admin\PostController::class,'store'])->name('admin.post.store');
		Route::GET('post/show/{id}',[App\Http\Controllers\Admin\PostController::class,'show'])->name('admin.post.show');
		Route::GET('post/edit/{id}',[App\Http\Controllers\Admin\PostController::class,'edit'])->name('admin.post.edit');

        Route::PUT('post/{id}',[App\Http\Controllers\Admin\PostController::class,'update'])->name('admin.post.update');
		Route::POST('post/{id}',[App\Http\Controllers\Admin\PostController::class,'delete'])->name('admin.post.delete');


});
	




///user

// Route::group(['prefix' =>'user','as' =>'user.' ,'namespace'=>'User','middleware'=>['auth','user']],function(){
// 	// Route::get('dashboard','DashboardController@index')->name('dashboard');
// 	Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');	
// });

Route::group(['prefix' => 'user'], function(){
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');

      Route::get('comments', [App\Http\Controllers\User\CommentController::class, 'index'])->name('user.comments.index');
      Route::POST('comment/{id}',[App\Http\Controllers\User\CommentController::class,'delete'])->name('user.comment.delete');


      Route::GET('/reply-comment',[App\Http\Controllers\User\CommentReplyController::class,'index'])->name('user.comment-reply.index');

	Route::POST('reply/comment/{id}',[App\Http\Controllers\User\CommentReplyController::class,'delete'])->name('user.comment-Reply.delete');



});


//view composer

View::composer('layouts.frontend.partials.sidebar',function($view){
$categories = Category::all()->take(10);
$recentTags = Tag::all();
$recentPosts = Post::latest()->take(3)->get();
return $view->with('categories',$categories)->with('recentPosts',$recentPosts)->with('recentTags',$recentTags);
});

