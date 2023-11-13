<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;
    protected $table = "reservations";
    protected $fillable = ["mealType", "adults", "children", "date", "timeHour", "timeMinutes", "remark"];
}
