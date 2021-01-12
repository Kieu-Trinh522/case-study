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
        $categories  = Category::all();
        $country   = Country::all();
        $ambums    = Ambum::all();
        $singers   = Singer::all();
        // dd($ambums);

        return view('ponends.home', compact('playlists', 'categories', 'country', 'ambums', 'singers'));
    }

    public function getPlaylistByCategory($id)
    {

        $playlists= Playlist::where('category_id',$id)->get();
        return view('ponends.category', compact('playlists'));
    }

    public function country()
    {
        $countries = Country::all();
        return view('ponends.country', compact('countries'));
    }

    public function getPlaylistByAlbum($id)
    {
        $ambums = Playlist::where('ambum_id',$id)->get();
        return view('ponends.ambum',compact('ambums'));
    }

    public function song()
    {
        $songs = Playlist::all();
        return view('ponends.song', compact('songs'));
    }

    public function singer($id)
    {
        $ambums    = Ambum::all();
        $singers = Singer::findOrFail($id);
        $playlists=Playlist::where('singer_id',$id)->get();
        return view('ponends.singer', compact('singers', 'ambums','playlists'));
    }

    public function ponend()
    {
        $ambums = Ambum::all();
        $singers = Singer::all();
        return view('layouts.home', compact('ambums', 'singers'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('ponend.index');
        }

        $playlists = Playlist::where('music_name', 'LIKE', '%'. $search . '%')
            ->paginate(5);
        $categories=Category::all();
        $country  = Country::all();
        $ambums    = Ambum::all();
        $singers   = Singer::all();
        return view('ponends.home', compact('playlists', 'categories', 'country', 'ambums','singers'));

    }



}
