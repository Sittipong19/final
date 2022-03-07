<?php

namespace App\Http\Controllers;
use App\Models\actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function actor()
    {
        $data=actor::all();
        return view("actorview",compact("data"));
    }

    public function uploadactor(Request $request)
    {
        $data = new actor;
        $data->act_name=$request->act_name;
        $data->act_lname=$request->act_lname;
        $data->act_gender=$request->act_gender;
        $data->save();
        return redirect()->back();
    }

    public function addactor(Request $request)
    {
        return view("addactor");
    }

    public function deleteactor($id)
    {
        $data=actor::find($id);
        $data->delete();
        return redirect()->back();
        
    }
}
