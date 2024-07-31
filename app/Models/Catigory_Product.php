<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory_Product extends Model
{
    use HasFactory;


protected $fillable=["catigory_id","product_id"];

    public function catigories()
    {
        return $this->belongsTo(Catigory::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
