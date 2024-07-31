<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\User;
use App\Models\Catigory;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function all_product()
   {
    $products= Product::all();
    $user= Users::all();
    return view("product.view_all_products",["products"=>$products,$users=>"users"]);
   }

   public function add_product()
   {
    return view("product.view_product");
   }
   public function product_add(REQUEST $request)
   {
    Product::create(
        [
            "name"=>$request->name,
            "description"=>$request->description,
            "image"=>"https://templatemo.com/templates/templatemo_507_victory/img/cook_lunch.png",
            "price"=>$request->price,
          

          
        ]);
        return redirect()->route("all_product");
   }



public function update_product(REQEST $request, $id)

{

    return view("product.product_update");
}

public function product_update(REQUEST $request)
{
    Product::update(
        [
            "name"=>$request->name,
            "description"=>$request->description,
            "image"=>"https://templatemo.com/templates/templatemo_507_victory/img/cook_lunch.png",
            "price"=>$request->price,
          

        ]);
        return redirect()->route("all_product");
}
}