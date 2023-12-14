<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RservationoverzichtController extends Controller
{
    public function showReservationPage() {

        return view('reservationoverzicht');
    }
}