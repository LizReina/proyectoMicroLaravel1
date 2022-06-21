<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'], function ($router) {
        Route::post('login', 'App\Http\Controllers\AuthAuthController@login');
        Route::post('register', 'App\Http\Controllers\AuthAuthController@register');
        Route::post('logout', 'App\Http\Controllers\AuthAuthController@logout');
        Route::post('refresh', 'App\Http\Controllers\AuthAuthController@refresh');
        Route::post('me', 'App\Http\Controllers\AuthAuthController@me');

        Route::post('/UserConductor', 'App\Http\Controllers\ConductorController@register');
    }
);