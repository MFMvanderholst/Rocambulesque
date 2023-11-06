<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Reservation extends Model
    {
        /**
        * Get the user that reserves the reservation.
        */
        public function user() : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }