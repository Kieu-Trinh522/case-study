<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

            // $location = storage_path('audio/'. $filename);

            $audio->storeAs('public/audio/' , $filename);

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

    public function edit($id)
    {
        $playlist = Playlist::findOrFail($id);
        $category = Category::all();
        $country  = Country::all();

        return view('playlists.edit', compact('playlist', 'category', 'country'));
    }

    public function update(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->fill($request->all());

        if($request->hasFile('image')) {

            $currentImg = $request->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path  = $image->store('images', 'public');
            $playlist->image = $path;
        }

        if($request->hasFile('audio')) {
            $currentAudio = $request->audio;

            if($currentAudio) {
                Storage::delete('/pubic/' . $currentAudio);
            }

            $audio = $request->audio;

            $filename = $audio->getClientOriginalName();

            $audio->storeAs('public/audio/' , $filename);

            $playlist->audio = $filename;
        }

        $playlist->save();

        return redirect()->route('playlists.index');
    }

    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();

        return redirect()->route('playlists.index');
    }







}
