<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/page', 'PostController@index'); ?? does not work!

Route::get('/{category}/{postslug}', [PostController::class, 'show']);
// Route::get('/{post}', function ($post) {
//     return 'User '.$post;
// });
Route::get('/page', [PostController::class, 'show']);

