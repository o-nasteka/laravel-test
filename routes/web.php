<?php

use App\Task;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    $name = $request->input('task');
    $cat = $request->input('category');

    // Create task
    $task = new Task;
    $task->name = $name;
    $task->category_id = $cat;
    $task->save();

    $request->session()->flash('status', 'Task: "' . $task->name .'" was successfuly added!');
    return $request;

});

/**
 * Delete task
 */
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});

/**
 * Update task
 */
Route::put('/task/{task}/edit', function (Task $task) {
    $task->name = Input::get('name');
    $task->category_id = Input::get('category_id');
    $task->save();
    return redirect('/');
});


/**
 * Add new category
 */
Route::post('/category', function (Request $request) {

    // Create category
    $category = new Category();
    $category->name = $request->category;
    $category->save();

    $request->session()->flash('status', 'Category: "' . $category->name .'" was successfuly added!');
    return $request;

});

/**
 * Delete category
 */
Route::delete('/category/{category}', function (Category $category) {
    $category->delete();

    return redirect('/');
});