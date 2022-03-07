<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rating;

class RatingController extends Controller
{
    public function rating()
    {
        $data=rating::all();
        return view("ratingview",compact("data"));
    }

    public function uploadrating(Request $request)
    {
        $data = new rating;
        $data->rat_name=$request->rat_name;
        $data->save();
        return redirect()->back();
    }

    public function addrating()
    {
        return view("addrating");
    }

    public function delete($id)
    {
        $data=rating::find($id);
        $data->delete();
        return redirect()->back();
        
    }

    public function editratingset(Request $request,$id)
   {
        $data=rating::find($id);

        $data->rat_name=$request->rat_name;

        $data->save();

        return redirect()->back();
   }
    

    public function editrating()
    {
        return view('editrating');
    }

    


}
