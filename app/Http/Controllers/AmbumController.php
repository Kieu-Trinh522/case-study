<?php

namespace App\Http\Controllers;

use App\Models\Ambum;
use App\Models\Playlist;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AmbumController extends Controller
{
    public function index()
    {
        $ambums = Ambum::paginate(10);
        $playlist = Playlist::all();

        return view('ambums.list', compact('ambums', 'playlist'));
    }

    public function create()
    {
        $playlist = Playlist::all();
        return view('ambums.create', compact('playlist'));
    }

    public function store(Request $request)
    {
        $ambum = new Ambum();
        $ambum->fill($request->all());

        if($request->hasFile('image'))
        {
            $image = $request->file('image');

            $path  = $image->store('images', 'public');
            $ambum->image = $path;
        }

        $ambum->save();

        return redirect()->route('ambums.index');
    }

    public function edit($id)
    {
        $ambum = Ambum::findOrFail($id);
        $playlist = Playlist::all();

        return view('ambums.edit', compact('ambum', 'playlist'));
    }

    public function update(Request $request, $id)
    {
        $ambum = Ambum::findOrFail($id);
        $ambum->fill($request->all());

        if($request->hasFile('image'))
        {
            $currentImg = $request->file('image');
            if($currentImg)
            {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path  = $image->store('images', 'public');
            $ambum->image = $path;
        }

        $ambum->save();

        return redirect()->route('ambums.index');
    }

    public function destroy($id)
    {
        $ambum = Ambum::findOrFail($id);
        $ambum->delete();

        return redirect()->route('ambums.index');
    }
}
