<?php

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

use App\Post;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
  // https://laravel.com/docs/6.x/eloquent#retrieving-models
  $users = App\User::all();
  // Render
  return view('users_list', ['users'=>$users]);
});

Route::get('/randompost', function () {
  $post = App\Post::find(rand(1, 50));
  return view('random_post', ['post'=>$post]);
});

Route::get('newpost', function () {
  return view('new_post');
})->middleware('auth');

Route::post('newpost', function (Request $request) {
  $validator = Validator::make($request->all(), [
    'text' => 'required|max:255',
  ]);
  if ($validator->fails()) {
    return redirect('/')
    ->withInput()
    ->withErrors($validator);
  }
  // Crear un post
  $post = new Post;
  $post->text = $request->text;
  $post->img = $request->img;
  $post->user_id = Auth::id();
  $post->created_at = now();
  $post->updated_at = now();
  $post->save();
  // Volver a view newpost
  return redirect('/newpost');
});


// Authentication

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
