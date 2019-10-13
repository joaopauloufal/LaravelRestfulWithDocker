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
    return $request->user();
});

Route::middleware('auth:api')->prefix('v1')->group(function(){
    // Route::get('/products', 'ProductController@index');
    // Route::post('/products', 'ProductController@store');
    // Route::put('/products/{product}', 'ProductController@update');
    // Route::get('/products/{product}', 'ProductController@show');
    // Route::delete('/products/{product}', 'ProductController@destroy');

    Route::resources([
        'products' => 'ProductController',
        'users' => 'UserController'
    ]);
});
