<?php

namespace App\Http\Controllers;

use App\Models\Ambum;
use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;
use App\Models\Singer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $playlist = Playlist::all();
        return view('category.listCategory',compact('categories', 'playlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new Category();
        $category->fill($request->all());
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
       return view('category.editCategory',compact('category'));
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
        $category=Category::find($id);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }

   public function search(Request $request)
   {
       $search = $request->input('search');
       if (!$search) {
           return redirect()->route('category.index');
       }
       $categories = Category::where('category_name','LIKE', '%'. $search . '%')->paginate(5);

       $playlists = Playlist::all();
       $country = Country::all();
       $ambum = Ambum::all();
       $singer=Singer::all();
       return view('category.listCategory', compact('playlists', 'categories', 'country', 'ambum','singer'));

   }


}
