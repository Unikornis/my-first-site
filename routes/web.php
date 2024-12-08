<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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
    return view('layout');
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

/*
        Route::get('/posts/{post}', function ($post) {
            return view('post', [
            'post' => $post
            ]);
            });
 */
/*
            Route::get('/posts/{post}', function ($post) {
                $posts = [
                'elso-bejegyzes' => 'Helló, ez az első posztom a blogban!',
                'masodik-bejegyzes' => 'Most kezdek belejönni a blogolásba'
                ];

//                return view('post', [
//                'post' => $posts[$post]
//                ]);

                return view('post', [
                    'post' => $posts[$post] ?? 'Semmi nincs itt.'
                    ]);
                });
 */
/*
 Route::get('/posts/{post}', function ($post) {
    $posts = [
    'elso-bejegyzes' => 'Helló, ez az első posztom a blogban!',
    'masodik-bejegyzes' => 'Most kezdek belejönni a blogolásba'
    ];

if ( ! array_key_exists($post, $posts)) {
abort(404);
}
    return view('post', [
        'post' => $posts[$post] ?? 'Semmi nincs itt.'
        ]);
    });
 */
/*
 Route::get('/posts/{post}', ['App\Http\Controllers\PostController',
'show']);
 */

 Route::get('/posts/{post}', [PostController::class, 'show']);
