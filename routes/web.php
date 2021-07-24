<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\managment\AdminController;

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
    return view('welcome');
});
// Vue Auth routes
//Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Managment and admin routes 
Route::group(['middleware' => 'auth'], function () {

Route::get('/managment', [AdminController::class,'index']);

Route::get('/edit',[AdminController::class,'edit']);

});




