<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;

class GenreController extends Controller
{
    public function genre()
    {
        $data=genre::all();
        return view("genreview",compact("data"));
    }

    public function uploadgenre(Request $request)
    {
        $data = new genre;
        $data->gne_name=$request->gne_name;
        $data->save();
        return redirect()->back();
    }

    public function addgenre()
    {
        return view("addgenre");
    }

    public function deletegenre($id)
    {
        $data=genre::find($id);
        $data->delete();
        return redirect()->back();
        
    }
}
