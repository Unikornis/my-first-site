<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello-api', function () {
    return "Hello API !";
    });

    Route::get('/request-test-api', function () {
        return [
        'title' => request('title'),
        // példa: http://127.0.0.1:8000/api/request-test-api?title=MyFirstTitle
        ];
        });
