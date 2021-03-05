<?php

use App\Http\Controllers\ToolController;
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

// Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get("/tool",[ToolController::class,'index'])->name('tool.index');

Route::post("/tool/calculate_density",[ToolController::class, 'calculate'])->name('tool.calculate');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
