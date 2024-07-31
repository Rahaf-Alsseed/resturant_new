<?php

namespace App\Http\Controllers;

use App\Models\Catigory;
use Illuminate\Http\Request;

class CatigoryController extends Controller
{
    public function add_catigory()
    {

        return view("catigory.view_catigory");
    }
    public function  catigory_add(Request $request)
    {
        Catigory::create([
            "name"=>$request->name,
        ]);
        return redirect()->route('add_catigory');
    }
}
