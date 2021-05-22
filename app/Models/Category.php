<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

        public function getChildren(){
            return $this->hasMany(Category::class,'categories_parent_node','categories_id');
        }
    // Lấy thông tin của nhiều thằng product
        public function product()
        {
            // Lấy ra thông tin của thằng cha,
            // thằng cha nào có con thì nó sẽ hiện thêm ở phía dưới
            return $this->hasMany(Product::class, 'categories_id', 'categories_id');
        }


}
