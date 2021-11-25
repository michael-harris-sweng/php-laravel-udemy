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

// Route::get('/about', function () {
//     return "About my app";
// });

// Route::get('/post/{id}', function($id) {
//     return "Posted " . $id;
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "Posted " . $id . " by " . $name;
// });

// Route::get('/admin/posts/example', array('as' => 'admin.home', function() {
    
//     $url = route('admin.home');

//     return "At URL " . $url;
// }));


// Route::get('/post/{id}', '\App\Http\Controllers\PostController@index');

// Route::resource('posts', '\App\Http\Controllers\PostController');

// Route::get('/contact', '\App\Http\Controllers\PostController@contact');

Route::get('/contact/{name}', '\App\Http\Controllers\PostController@contact');

Route::get('posts/{id}', '\App\Http\Controllers\PostController@showPost');