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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->namespace('Api')->group(function(){
    Route:: post('login','Auth\\LoginJwtController@login')->name('login');
    Route:: post('logout','Auth\\LoginJwtController@logout')->name('logout');
     
    Route::group(['middleware'=>['jwt.auth']], function(){
       
            Route::post('/passaporte','PassaporteController@PequisarPassaporte');
     
    });
   

});
