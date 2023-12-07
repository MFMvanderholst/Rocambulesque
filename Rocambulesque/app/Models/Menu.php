<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function getCategory()
    {
        return $this->belongsTo(menu_category::class, 'menu_category_id');
    }

    public function getDish()
    {
        return $this->belongsTo(dish_category::class, 'dish_id');
    }
}
