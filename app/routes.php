<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('posts', 'PostsController', ['only' => ['show']]);
Route::get('/', ['as' => 'home', 'uses' => 'PostsController@index']);
Route::get('my-story', function ()
{
    return View::make('pages/my-story');
});
