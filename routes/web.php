<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DuplicatesController;


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
    return view('pages.welcome');
});

Route::get('/full-table',[HomeController::class,'index'])
      ->name('full-table.index');
Route::get('/merge&fix',[DuplicatesController::class,'index'])
      ->name('merge&fix.index');
