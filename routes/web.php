<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::view('/', 'index');
// Route::view('/about', 'about');
// Route::view('/contact', 'contact');
// Route::view('/description', 'description');


Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/description', function () {
    return view('description');
})->name('description');

// Route::get('/request', function () {
//     dd(request());
// });



// Route::get('/user', [UserController::class, 'getAllUserData']);

// Route::get('/home', function () {
//     return view('user.index', [
//         'users' => User::all(),
//     ]);
// });

// Route::redirect('/youtube', '/home');













// Route::get('/home', function () {
//     return "home";
// });

// Route::redirect('/youtube', '/home');











// Route::get('/test', function () {
//     $asset = [
//         '../image/2.png',
//         asset('image/2.png')
//     ];

//     return $asset;
// });
