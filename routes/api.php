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

$prefix = '/v1';

Route::group([
	'prefix'	=>	$prefix
], 
function()
{
	Route::post('login', [
		'as'	=>	'login',
		'uses'	=>	'Auth\AuthController@login'
	]);
});

Route::group([
	// 'middleware' => 'auth:api',
	'prefix'	=>	$prefix
], 
function()
{
    Route::post('logout', 'Auth\AuthController@logout');
});
