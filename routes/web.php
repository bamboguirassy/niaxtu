<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/',function() {
    return view('home');
})->name('home_route');

Route::get('/guide', function () {
    return view('guide');
})->name('guide_route');

Route::get('/account', function () {
    return view('user.account');
})->name('account_route');

Route::get('/post/lazy-load/{categorie?}','App\Http\Controllers\PostController@loadPosts');

Route::get('/posts/mines/', 'App\Http\Controllers\PostController@loadUserPosts');

Route::get('/posts', function () {
    return view('post.posts');
})->name('posts_route');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@findOneById')->name('posts_by_id_route');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts_route');

Route::post('login','App\Http\Controllers\UserController@login')
->name('login_route');

Route::put('password-update','App\Http\Controllers\UserController@updatePassword')
->name('password_update_route');

Route::post('logout','App\Http\Controllers\UserController@logout')
->name('logout_route');

Route::resource('user', UserController::class,
[
    'only'=>['index','store','update']
]);

Route::resource('post', PostController::class,
[
    'only'=>['store','update','show','destroy']
]);

Route::get('/categorie','App\Http\Controllers\CategorieController@load');

Route::post('/like/{id}',function($id) {
    $like = new Like();
    $like->post_id = $id;
    if(Auth::guest()) {
        return ['error'=>true,'message'=>"Vous devez être connecté pour aimer ce commentaire"];
    }
    $like->user_id = Auth::user()->id;
    $like->save();
    return ['error'=>false];
});

Route::post('/comment/{id}',function ($id, Request $request) {
    if(Auth::guest()) {
        return ['error'=>true,'message'=>"Vous devez être connecté pour laisser un commentaire..."];
    }
    Validator::validate($request->all(),
    ['comment'=>'required']);
    $comment = new Comment($request->all());
    $comment->user_id = Auth::user()->id;
    $comment->post_id = $id;
    $comment->save();
    return ['error'=>false];
});