<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(['prefix' => 'playlists'], function () {
//    Route::get('playlist', [PlaylistController::class, 'index']);
//    Route::post('playlist', [PlaylistController::class, 'store'])->name('playlist.store');
//    Route::get('playlist/{id}/edit', [PlaylistController::class, 'edit'])->name('playlist.edit');
//    Route::post('playlist/update', [PlaylistController::class, 'update'])->name('playlist.update');
//    Route::post('playlist/search/{search}', [PlaylistController::class, 'search'])->name('playlist.search');
//    Route::get('playlist/{id}/delete', [PlaylistController::class, 'destroy'])->name('playlist.delete');
//});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/add',[CategoryController::class,'create'])->name('category.create');
    Route::post('/add', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

Route::group(['prefix' => 'country'], function () {
    Route::get('/', [CountryController::class, 'index'])->name('country.index');
    Route::get('/add',[CountryController::class,'create'])->name('country.create');
    Route::post('/add', [CountryController::class, 'store'])->name('country.store');
    Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('/edit/{id}', [CountryController::class, 'update'])->name('country.update');
    Route::get('/delete/{id}', [CountryController::class, 'destroy'])->name('country.delete');
});
//
//Route::group(['prefix' => 'user'], function () {
//    Route::post('user/register', [UserController::class, 'store'])->name('user.store');
//    Route::post('user/login', [UserController::class, 'authenticate'])->name('user.authenticate');
//    Route::get('user/logout', [UserController::class, 'logout'])->name('user.logout');
//});





