<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveringklantController extends Controller
{
    public function showReservationCustomer() {

        return view('reserveringklant');
    }
}
