<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;
use App\Models\Ambum;
use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;

class PonendController extends Controller
{
    public function index()
    {
        $playlists = Playlist::paginate(10);
        $category  = Category::all();
        $country   = Country::all();
        $ambum     = Ambum::all();
        // dd($ambums);

        return view('ponend.home', compact('playlists', 'category', 'country', 'ambum'));
    }

    public function category()
    {
        $categories = Category::all();
        return view('ponend.category', compact('categories'));
    }

    public function country()
    {
        $countries = Country::all();
        return view('ponend.country', compact('countries'));
    }

    public function ambum()
    {
        $ambums = Ambum::all();
        return view('ponend.ambum',compact('ambums'));
    }

    public function song()
    {
        $songs = Playlist::all();
        return view('ponend.song', compact('songs'));
    }

    public function singer()
    {
        $singers=Singer::all();
        return view('ponend.singer',compact('singers'));
    }
}
