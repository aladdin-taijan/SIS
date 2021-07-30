<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\managment\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentEducationsController;
use App\Http\Controllers\MasterSelectionsController;
use App\Http\Controllers\StudentDocumentsController;
use App\Http\Controllers\SummaryController;

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
/*
 Route::get('/', function () {
     return view('welcome');
 });
 */
Route::get('/', [StudentController::class, 'create'])->name('info');
Route::post('/', [StudentController::class, 'store'])->name('storeinfo');

Route::get('/rp/{id}', [MasterSelectionsController::class, 'create']);
Route::post('/rp/{id}', [MasterSelectionsController::class, 'store'])->name('storerp');

Route::get('/edu/{id}/{program}', [StudentEducationsController::class, 'create'])->name('edu')->where(['id' => '[0-9]+', 'program' => '[a-z]+']);
Route::post('/edu/{id}/{program}', [StudentEducationsController::class, 'store'])->name('storeedu');

Route::get('/doc/{id}/{program}', [StudentDocumentsController::class, 'create'])->name('doc')->where(['id' => '[0-9]+', 'program' => '[a-z]+']);
Route::post('/doc/{id}/{program}', [StudentDocumentsController::class, 'store']);

Route::get('/summary', [SummaryController::class, 'index'])->name('summary');


// Vue Auth routes
//Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Managment and admin routes
Route::group(['middleware' => 'auth'], function () {

Route::get('/managment', [AdminController::class,'index']);

Route::get('/managment/edit/{id}',[AdminController::class,'edit']);

Route::post('update/{id}',[AdminController::class,'update'])->name('update');

Route::get('/managment/show', [AdminController::class,'show']);

});
