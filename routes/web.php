<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    // return ["kulcs"=>"érték"];
    $username = 'John';
return view('contact', [
'name' => $username
]);
});

// Route::view('/contact', 'contact');

Route::get('/tomb', function () {
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to the work',
    'Task #3.5'
    ];
    $foobar = 'foobar';
/*
    return view('tasklist', [
    'tasks' => $tasks
    ]);
     */
    // return view('tasklist')->withTasks($tasks)->withFoo($foobar);
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
        ]);
    });

    Route::get('/request-test', function () {
        return view('request-inputs', [
        'title' => request('title'),
        ]);
        });
