<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveringmakenController extends Controller
{
    public function showMakeReservation() {

        return view('reserveringmaken');
    }
}
