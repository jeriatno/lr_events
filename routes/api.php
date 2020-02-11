<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users', 'UserController@users');
Route::get('users/profile', 'UserController@profile')->middleware('auth:api');
Route::get('users/profile/{id}', 'UserController@profileUser')->middleware('auth:api');
Route::post('property', 'Api\PropertyApiController@add')->middleware('auth:api');
Route::put('property/{property}', 'Api\PropertyApiController@update')->middleware('auth:api');
Route::delete('property/{property}', 'Api\PropertyApiController@delete')->middleware('auth:api');
