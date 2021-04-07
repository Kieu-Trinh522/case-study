<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Playlist;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::paginate(10);
        $playlist = Playlist::all();

        return view('albums.list', compact('albums', 'playlist'));
    }

    public function create()
    {
        $playlist = Playlist::all();
        return view('albums.create', compact('playlist'));
    }

    public function store(AlbumRequest $request)
    {
        $album = new Album();
        $album->fill($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $path = $image->store('images', 'public');
            $album->image = $path;
        }

        $album->save();

        return redirect()->route('albums.index');
    }

    public function edit($id)
    {
        $album = Album::findOrFail($id);
        $playlist = Playlist::all();

        return view('albums.edit', compact('album', 'playlist'));
    }

    public function update(AlbumRequest $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->fill($request->all());

        if ($request->hasFile('image')) {
            $currentImg = $request->file('image');
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $album->image = $path;
        }

        $album->save();

        return redirect()->route('albums.index');
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect()->route('albums.index');
    }

    public function search(AlbumRequest $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('albums.index');
        }

        $playlists = Playlist::all();
        $albums = Album::where('name_album', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('albums.list', compact('playlists', 'albums'));

    }
}
