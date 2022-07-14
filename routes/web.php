<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('child');
});

// Route::get('/greeting', function () {
//     return 'Hello World';
// });


// Route::get('/welcome', function () {
//     return 'Hello Worlds';
// });


//  Route::get('/welcomes/{id}', function($id) 
//    return 'id is'.$id;
// });

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'User '.$id.' '.$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// to change the url name//
// Route::get('profile', function () {
//     return route('profiles');
// })->name('profiles');


// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//         return "Hello Bro!";
//     });
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user/{id}', [UserController::class, 'show']);
