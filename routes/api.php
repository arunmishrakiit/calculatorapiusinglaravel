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
 
Route::post('add', 'CalculatorController@add');
Route::post('subtract', 'CalculatorController@subtract');
Route::post('multiplication', 'CalculatorController@multiplication');
Route::post('division', 'CalculatorController@division');
Route::post('square', 'CalculatorController@square');
Route::post('save', 'CalculatorController@save');
Route::get('savedValue', 'CalculatorController@savedValue');
Route::post('clear', 'CalculatorController@clear');