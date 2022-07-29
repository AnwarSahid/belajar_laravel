<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Models\User;
use Facade\FlareClient\View;
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
    return view('index');
})->name('index');


Route::get('/about', [UserController::class, 'ViewAbout'])->name('about.index');
Route::get('/about/{user}', [UserController::class, 'detailAbout'])->name('about.detail');
Route::get('/contact', [UserController::class, 'ViewContact'])->name('contact');
Route::get('/description', [UserController::class, 'ViewDescription'])->name('description');
Route::get('/dashboad/admin', [UserController::class, 'ViewDescription'])->name('description');


// Route::get('/about', [ViewController::class, 'Profile'])->name('about');

























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
