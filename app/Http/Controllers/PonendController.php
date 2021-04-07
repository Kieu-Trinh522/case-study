<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;
use App\Models\Singer;
use Illuminate\Http\Request;

class PonendController extends Controller
{
    public function index()
    {
        $playlists = Playlist::paginate(5);
        $categories = Category::all();
        $country = Country::all();
        $albums = Album::all();
        $singers = Singer::all();
        // dd($ambums);

        return view('ponends.home', compact('playlists', 'categories', 'country', 'albums', 'singers'));

    }

    public function getPlaylistByCategory($id)
    {

        $categories = Category::all();
        $playlists = Playlist::where('category_id', $id)->get();
        return view('ponends.category', compact('playlists', 'categories'));

    }

    public function country()
    {
        $countries = Country::all();
        return view('ponends.country', compact('countries'));
    }

    public function getPlaylistByAlbum($id)
    {

        $ambums = Playlist::where('ambum_id', $id)->get();

        return view('ponends.ambum', compact('ambums'));
    }

    public function song()
    {
        $songs = Playlist::all();
        return view('ponends.song', compact('songs'));
    }

    public function singer($id)
    {
        $singers = Singer::all();
        $categories = Category::all();
        $albums = Album::all();
        $singer = Singer::findOrFail($id);
        $playlists = Playlist::where('singer_id', $id)->get();
        return view('ponends.singer', compact('singers', 'albums', 'playlists', 'singer', 'categories'));

    }

    public function ponend()
    {
        $albums = Album::all();
        $singers = Singer::all();
        return view('layouts.home', compact('albums', 'singers'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('ponend.index');
        }

        $playlists = Playlist::where('music_name', 'LIKE', '%' . $search . '%')
            ->paginate(5);
        $categories = Category::all();
        $country = Country::all();
        $albums = Album::all();
        $singers = Singer::all();
        return view('ponends.home', compact('playlists', 'categories', 'country', 'albums', 'singers'));

    }

    public function play($id)
    {

        $playlists = Playlist::findOrFail($id);
        $playlist = Playlist::paginate(5);
        $categories = Category::all();
        $country = Country::all();
        $albums = Album::all();
        $singers = Singer::all();
        return view('ponends.play', compact('playlists', 'playlist', 'categories', 'country', 'albums', 'singers'));
    }

}
