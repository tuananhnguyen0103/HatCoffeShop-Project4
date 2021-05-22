<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePrice extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function getProduct(){
    //     return $this->belongsTo(Product::class,'product_id','product_id');
    // }
}
