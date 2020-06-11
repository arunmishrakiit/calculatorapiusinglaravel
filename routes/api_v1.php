<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Calculator;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
Route::post('add', 'API\v1\CalculatorController@add');
Route::post('substract', 'API\v1\CalculatorController@substract');
Route::post('multiply', 'API\v1\CalculatorController@multiply');
Route::post('divide', 'API\v1\CalculatorController@divide');
Route::post('squareRoot', 'API\v1\CalculatorController@squareRoot');
Route::post('save', 'API\v1\CalculatorController@save');
Route::get('savedValue', 'API\v1\CalculatorController@savedValue');
Route::post('clear', 'API\v1\CalculatorController@clear');