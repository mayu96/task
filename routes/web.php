<?php

use Illuminate\Http\Request;
use App\Task;

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

Route::get('/', 'TaskController@index');
Route::post('/store', 'TaskController@store');
Route::get('/delete/{id}', 'TaskController@delete');
Route::get('/detail/{id}', 'TaskController@detail');

