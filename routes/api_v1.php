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
Route::post('subtract', 'API\v1\CalculatorController@subtract');
Route::post('multiplication', 'API\v1\CalculatorController@multiplication');
Route::post('division', 'API\v1\CalculatorController@division');
Route::post('square', 'API\v1\CalculatorController@square');
Route::post('save', 'API\v1\CalculatorController@save');
Route::get('savedValue', 'API\v1\CalculatorController@savedValue');
Route::post('clear', 'API\v1\CalculatorController@clear');