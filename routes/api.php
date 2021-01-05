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

Route::group(['prefix' => 'playlists'], function () {
    Route::get('/', [PlaylistController::class, 'index'])->name('playlists.index');
    Route::get('/create', [PlaylistController::class, 'create'])->name('playlists.create');
    Route::post('/create', [PlaylistController::class, 'store'])->name('playlists.store');
    Route::get('/edit/{id}', [PlaylistController::class, 'edit'])->name('playlists.edit');
    Route::post('/edit/{id}', [PlaylistController::class, 'update'])->name('playlists.update');
    Route::post('playlist/search/{search}', [PlaylistController::class, 'search'])->name('playlists.search');
    Route::get('/destroy/{id}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');
    Route::get('/show/{id}', [PlaylistController::class, 'show'])->name('playlists.show');

});

Route::group(['prefix' => 'category'], function () {
    Route::get('category', [CategoryController::class, 'index']);
    Route::post('category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/{id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
});

Route::group(['prefix' => 'country'], function () {
    Route::get('country', [CountryController::class, 'index']);
    Route::post('country', [CountryController::class, 'store'])->name('country.store');
    Route::get('country/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('country/update', [CountryController::class, 'update'])->name('country.update');
    Route::get('country/{id}/delete', [CountryController::class, 'destroy'])->name('country.delete');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/',[UserController::class, 'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
    Route::post('/login', [UserController::class, 'authenticate'])->name('user.authenticate');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});





