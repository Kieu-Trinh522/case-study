<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambum;
use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;
use App\Models\Singer;

class PonendController extends Controller
{
    public function index()
    {
        $playlists = Playlist::paginate(5);
        $category  = Category::all();
        $country   = Country::all();
        $ambums    = Ambum::all();
        $singers   = Singer::all();
        // dd($ambums);

        return view('ponends.home', compact('playlists', 'category', 'country', 'ambums', 'singers'));
    }

    public function category()
    {
        $categories = Category::all();
        return view('ponends.category', compact('categories'));
    }

    public function country()
    {
        $countries = Country::all();
        return view('ponend.country', compact('countries'));
    }

    public function ambum()
    {
        $ambums = Ambum::all();
        return view('ponends.ambum',compact('ambums'));
    }

    public function song()
    {
        $songs = Playlist::all();
        return view('ponends.song', compact('songs'));
    }

    public function singer()
    {
        $singers = Singer::all();
        return view('ponends.singer', compact('singers'));
    }

    public function ponend()
    {
        $ambums = Ambum::all();
        $singers = Singer::all();
        return view('layouts.home', compact('ambums', 'singers'));
    }

    public function play($id)
    {

        $playlists = Playlist::findOrFail($id);
        $playlist  = Playlist::paginate(5);
        $category  = Category::all();
        $country   = Country::all();
        $ambums    = Ambum::all();
        $singers   = Singer::all();
        return view('ponends.play', compact('playlists', 'playlist', 'category', 'country', 'ambums', 'singers'));
    }


}
