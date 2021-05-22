<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $guarded = [];

    // Lấy thông tin của thằng cha
    public function getCategory(){
        // Lấy ra thông tin của những thằng con
        // Xong gom lại và hiện thị thằng cha ở dưới
        //
        return $this->belongsTo(Category::class, 'categories_id', 'categories_id');
    }
    public function getSalePrices(){
        return $this->hasMany(SalePrice::class,'product_id','id');
    }
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price()
    {
        return $this->belongsTo(SalePrice::class, 'id');
    }
}
