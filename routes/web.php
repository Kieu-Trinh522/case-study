<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;
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


Route::get('test', function () {
    return view('layouts.core.master');
});

Route::get('test2', function () {
    return view('welcome');
});


Route::middleware('locale')->group(function () {
    Route::post('change-language', [LanguageController::class, 'changeLanguage'])->name('user.change-language');

    Route::group(['prefix' => 'playlists'], function () {
        Route::get('/', [PlaylistController::class, 'index'])->name('playlists.index');
        Route::get('/create', [PlaylistController::class, 'create'])->name('playlists.create');
        Route::post('/create', [PlaylistController::class, 'store'])->name('playlists.store');
        Route::get('/edit/{id}', [PlaylistController::class, 'edit'])->name('playlists.edit');
        Route::post('/edit/{id}', [PlaylistController::class, 'update'])->name('playlists.update');
        Route::post('/search', [PlaylistController::class, 'search'])->name('playlists.search');
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
        Route::post('/search', [CategoryController::class, 'search'])->name('category.search');
    });

    Route::group(['prefix' => 'country'], function () {
        Route::get('/', [CountryController::class, 'index'])->name('country.index');
        Route::get('/create', [CountryController::class, 'create'])->name('country.create');
        Route::post('/create', [CountryController::class, 'store'])->name('country.store');
        Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
        Route::post('/edit/{id}', [CountryController::class, 'update'])->name('country.update');
        Route::get('/{id}/delete', [CountryController::class, 'destroy'])->name('country.delete');
        Route::post('/search', [CountryController::class, 'search'])->name('country.search');
    });


    Route::group(['prefix' => 'albums'], function () {
        Route::get('/', [AlbumController::class, 'index'])->name('albums.index');
        Route::get('/create', [AlbumController::class, 'create'])->name('albums.create');
        Route::post('/create', [AlbumController::class, 'store'])->name('albums.store');
        Route::get('/edit/{id}', [AlbumController::class, 'edit'])->name('albums.edit');
        Route::post('/edit/{id}', [AlbumController::class, 'update'])->name('albums.update');
        Route::get('/destroy/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');
        Route::post('/search', [AlbumController::class, 'search'])->name('albums.search');
    });

    Route::group(['prefix' => 'singer'], function () {
        Route::get('/', [SingerController::class, 'index'])->name('singer.index');
        Route::get('/create', [SingerController::class, 'create'])->name('singer.create');
        Route::post('/create', [SingerController::class, 'store'])->name('singer.store');
        Route::get('/edit/{id}', [SingerController::class, 'edit'])->name('singer.edit');
        Route::post('/edit/{id}', [SingerController::class, 'update'])->name('singer.update');

        Route::get('/delete/{id}', [SingerController::class, 'destroy'])->name('singer.destroy');


        Route::post('/search', [SingerController::class, 'search'])->name('singer.search');

    });

});
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'show'])->name('user.show');
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/create', [UserController::class, 'store'])->name('user.store');
    Route::post('/login', [UserController::class, 'authenticate'])->name('user.login');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.update');
});


Route::get('/', [PonendController::class, 'index'])->name('frontend.index');

Route::middleware('AuthUser')->group(function () {
    Route::group(['prefix' => 'frontend'], function () {

        Route::get('/category/{id}', [PonendController::class, 'getPlaylistByCategory'])->name('frontend.category');
        Route::get('/country', [PonendController::class, 'country'])->name('frontend.country');
        Route::get('/album/{id}', [PonendController::class, 'getPlaylistByAlbum'])->name('frontend.album');
        Route::get('/song', [PonendController::class, 'song'])->name('frontend.song');
        Route::get('/singer/{id}', [PonendController::class, 'singer'])->name('frontend.singer');
        Route::post('/search', [PonendController::class, 'search'])->name('frontend.search');
        Route::get('/play/{id}', [PonendController::class, 'play'])->name('frontend.play');

    });
});


