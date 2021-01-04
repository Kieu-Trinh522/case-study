<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PlaylistController extends Controller
{

    public function index()
    {
        $playlists = Playlist::paginate(10);
        $category = Category::all();
        $country  = Country::all();

        return view('playlists.list', compact('playlists', 'category', 'country'));
    }

    public function create()
    {
        $category = Category::all();
        $country = Country::all();
        return view('playlists.create', compact('category', 'country'));
    }

    public function store(Request $request)
    {
        $playlist = new Playlist();
        $playlist->fill($request->all());

        if($request->hasFile('audio')) {
            $audio = $request->file('audio');

            $filename = $audio->getClientOriginalName();

            $location = public_path('audio/'. $filename);

            $audio->move($location, $filename);

            $playlist->audio = $filename;

        }

        if($request->hasFile('image')) {

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $playlist->image = $path;
        }


        $playlist->save();

        Session::flash('success', 'Upload with success');

        return redirect()->route('playlists.index');


    }

    public function show($id){
        $playlist = Playlist::findOrFail($id);

        return view('playlists.playlist', compact('playlist'));
    }










}
