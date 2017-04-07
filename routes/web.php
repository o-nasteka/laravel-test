<?php

use App\Task;
use Illuminate\Http\Request;

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

/**
 *  Task panel
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * Add new task
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Delete task
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});