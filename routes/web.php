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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PostsController@index');

Route::get('/category/{category}', "CategoryController@show");

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/about', function() {
    return view('page-about');
});

Route::get('/contact', function() {
    return view('page-contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PagesController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
