<?php

use App\Task;
use App\Category;
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
    $tasks = Task::orderBy('created_at', 'asc')->get();
    $categories = Category::orderBy('created_at', 'asc')->get();

    return view('tasks')->with([
            'tasks' => $tasks,
            'categories' => $categories
        ]
    );
});

/**
 * Add new task
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create task
    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');

});

/**
 * Delete task
 */
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});

/**
 * Add new category
 */
Route::post('/category', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'category' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create task
    $category = new Category();
    $category->name = $request->category;
    $category->save();

    return redirect('/');

});

/**
 * Delete category
 */
Route::delete('/category/{category}', function (Category $category) {
    $category->delete();

    return redirect('/');
});