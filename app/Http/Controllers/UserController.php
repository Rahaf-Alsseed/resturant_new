<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all_user()
    {
            $users= User::all();
    return view("home",["users"=>$users]);
    }

}
