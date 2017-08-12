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

Route::get('/', function () {
    return view('welcome');
});

Route::get('reg',function(){
    return view('reg');
});
Route::post('reg','RegController@reg');

Route::get('sign_in',function(){
    return view('login');
})                                                      ->name('sign_in');

Route::post('sign_in','LoginController@login');
Route::get('list','ListController@list')                ->name('index');


Route::post('new','CreateController@new')               ->name('new');
Route::post('article/comment','CreateController@comment')       ->name('comment');

Route::get('article/{article}','DetailController@query')     ->name('query');


