<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=
    [
        "name","description","price","image"
    ]; 
    
    // public function catigory()
    // {
    //     return $this->belongsTo(Catigory::class);
    // }
    public function catigory_products()
    {
        return $this->hasMany(Catigory_Product::class,"product_id");
    }
}
