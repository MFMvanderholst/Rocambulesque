<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ReservationModel extends Model
{
    use HasFactory;
    protected $table = "reservations";
    protected $fillable = [
        "fname", 
        "lname", 
        "email", 
        "phone", 
        "mealType", 
        "adults", 
        "children", 
        "date", 
        "timeHour", 
        "timeMinutes", 
        "remark", 
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
