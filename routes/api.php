<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return Auth::guard('api')->user();
    // return $request->user();
});

Route::get('wallpost', 'WallpostController@index');
Route::get('wallpost/{wallpost}', 'WallpostController@show');
Route::post('wallpost', 'WallpostController@store');
Route::put('wallpost/{wallpost}', 'WallpostController@update');
Route::delete('wallpost/{wallpost}', 'WallpostController@delete');

Route::get('comment', 'CommentsController@index');
Route::get('comment/{comment}', 'CommentsController@show');
Route::post('comment', 'CommentsController@store');
Route::put('comment/{comment}', 'CommentsController@edit');
Route::delete('comment/{comment}', 'CommentsController@delete');


Route::post( 'register' , 'Auth\RegisterController@register');
Route::get('login', 'Auth\LoginController@login');
