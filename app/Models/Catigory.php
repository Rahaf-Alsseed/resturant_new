<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;
    protected $fillable= ["name"];  

    // public function products()
    // {
    //     return $this->hasMany(Product::class,'catigory_id');//$this هي تابعة لاسم الكلاس
    // }
    public function catigory_products()
    {
        return $this->hasMany(Catigory_Product::class,"catigory_id");
    }




}

