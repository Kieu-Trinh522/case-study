<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PonendController;
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
Route::get('/', [PonendController::class, 'index']);

Route::get('test',function (){
    return view('layouts.core.master');
});

Route::get('test2',function (){
    return view('welcome');
});

