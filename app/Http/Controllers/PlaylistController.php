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
use function Composer\Autoload\includeFile;

class PlaylistController extends Controller
{

    public function index()
    {
        $playlists = Playlist::paginate(10);
        $category = Category::all();
        $country = Country::all();

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

        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');

            $filename = $audio->getClientOriginalName();

            // $location = storage_path('audio/'. $filename);

            $audio->storeAs('public/audio/', $filename);

            $playlist->audio = $filename;

        }

        if (!$request->hasFile('img')) {
            $playlist->image = 'uploads/default.png';
        } else {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploads'), $imageName);
            $playlist->image = 'uploads/' . $imageName;
        }


        $playlist->save();

        Session::flash('success', 'Upload with success');

        return redirect()->route('playlists.index');


    }

    public function show($id)
    {
        $playlist = Playlist::findOrFail($id);

        return view('playlists.playlist', compact('playlist'));
    }

    public function edit($id)
    {
        $playlist = Playlist::findOrFail($id);
        $category = Category::all();
        $country = Country::all();

        return view('playlists.edit', compact('playlist', 'category', 'country'));
    }

    public function update(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->fill($request->all());
        if (!$request->hasFile('img')) {
            $playlist->image = 'uploads/default.png';
        } else {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploads'), $imageName);
            $playlist->image = 'uploads/' . $imageName;
        }
        if ($request->hasFile('audio')) {
            $currentAudio = $request->audio;

            if ($currentAudio) {
                Storage::delete('/pubic/' . $currentAudio);
            }

            $audio = $request->audio;

            $filename = $audio->getClientOriginalName();

            $audio->storeAs('public/audio/', $filename);

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


    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('customers.index');
        }

        $playlist = Playlist::where('name', 'LIKE', '%' . $search . '%')->paginate(5);

        $category = Category::all();
        $country = Country::all();
        return view('customers.list', compact('customers', 'category', 'country'));
    }


}
