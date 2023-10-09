<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReservationModel;

class ReservationOverviewController extends Controller
{
    public function index()
    {
        return view('reservation_overview');
    }

    public function show()
    {
        $users = User::all();
        
        return view('users', [
            "data" => $users
        ]);

        $reservation = ReservationModel::all();

        return view('reservation', [
            "data" => $reservation
        ]);
    }

    public function create()
    {
        //
    }
        
    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }
}
