<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function view_page()
   {

   $products = Product::all();
   $user=User::all();
    return view("page",["products"=>$products,"user"=>$user]);
   }
}
