<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Singer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers=Singer::all();
        $country=Country::all();
        return view('singer.listSinger',compact('singers','country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('singer.addSinger');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $singer=new Singer();
        $singer->fill($request->all());

        if($request->hasFile('image')) {

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $singer->image = $path;
        }
        $singer->save();
        Session::flash('success', 'Upload with success');
        return redirect()->route('singer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singer=Singer::findOrFail($id);
        $country=Country::all();
        return view('singer.editSinger',compact('singer','country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $singer=Singer::findOrFail($id);
        $singer->fill($request->all());
        if($request->hasFile('image')) {

            $currentImg = $request->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path  = $image->store('images', 'public');
            $singer->image = $path;
        }
        $singer->save();
        Session::flash('success', 'Upload with success');
        return redirect()->route('singer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singer=Singer::findOrFail($id);
        $singer->delete();
        return redirect()->route('singer.index');
    }
}
