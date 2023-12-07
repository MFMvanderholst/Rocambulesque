<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'menu_category_id',
        'dish_id',
    ];

    public function getCategory()
    {
        return $this->belongsTo(menu_category::class, 'menu_category_id');
    }

    public function getDish()
    {
        return $this->belongsTo(dish_category::class, 'dish_id');
    }
}
