<?php 
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;

    class User extends Model
    {
        /**
        * Get the reservation associated with the user.
        */
        public function reservation() : HasOne
        {
            return $this->hasOne(Reservation::class);
        }
    }