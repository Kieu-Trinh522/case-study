<?php

use App\Http\Controllers\AmbumController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
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
    Route::post('/search/', [PlaylistController::class, 'search'])->name('playlists.search');
    Route::get('/destroy/{id}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');
    Route::get('/show/{id}', [PlaylistController::class, 'show'])->name('playlists.show');

});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
});

Route::group(['prefix' => 'country'], function () {
    Route::get('/', [CountryController::class, 'index'])->name('country.index');
    Route::get('/create', [CountryController::class, 'create'])->name('country.create');
    Route::post('/create', [CountryController::class, 'store'])->name('country.store');
    Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('/edit/{id}', [CountryController::class, 'update'])->name('country.update');
    Route::get('/{id}/delete', [CountryController::class, 'destroy'])->name('country.delete');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/create', [UserController::class, 'store'])->name('user.store');
    Route::post('/login', [UserController::class, 'authenticate'])->name('user.login');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
Route::get('home',[HomeController::class,'index']);

Route::group(['prefix' => 'ambums'], function () {
    Route::get('/', [AmbumController::class, 'index'])->name('ambums.index');
    Route::get('/create', [AmbumController::class, 'create'])->name('ambums.create');
    Route::post('/create', [AmbumController::class, 'store'])->name('ambums.store');
    Route::get('/edit/{id}', [AmbumController::class, 'edit'])->name('ambums.edit');
    Route::post('/edit/{id}', [AmbumController::class, 'update'])->name('ambums.update');
    Route::get('/destroy/{id}', [AmbumController::class, 'destroy'])->name('ambums.destroy');
});



