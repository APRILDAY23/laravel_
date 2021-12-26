<?php

//header("refresh: 2");

//use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
//use App\Http\Controllers\UserAuth;
//use App\Http\Controllers\PostsController;

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

Route::get('/', [ViewController::class, 'index']);

//Route::post("user", [UserAuth::class, 'userlogin'] );

Route::post('save', [ViewController::class, 'save'])->name('save');
Route::post('save1', [ViewController::class, 'save1'])->name('save1');
Route::post('check', [ViewController::class, 'check'])->name('check');
Route::get('sign', [ViewController::class, 'sign'])->name('signup');


Route::get('logout', [ViewController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['AuthCheck']], function() {
    Route::get('login', [ViewController::class, 'login'])->name('login');
    Route::get('admin', [ViewController::class, 'admin'])->name('admin');
    Route::get('announce', [ViewController::class, 'announce'])->name('announce');
});


// Route::resource('posts', [PostsController::class]);


// Route::get('/hello', function () {
//    // return view ('welcome');
//     echo '<div>';
//     echo '<p>Hello</p>';
  
// });

// Route::get('/about', function() {
// return view('about');
// });

// Route::get('/users/{id}' , function($id) {
//     return 'This is ' .$id;
// });



