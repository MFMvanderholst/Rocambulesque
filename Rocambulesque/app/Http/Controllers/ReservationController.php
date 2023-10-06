<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationModel;

class ReservationController extends Controller
{   
    public function show()
    {
        return view('reservation');
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $reservation = new ReservationModel([
            "choice" => $request->input("choice"),
            "amount" => $request->input("amount"),
            "date" => $request->input("date"),
            "time" => $request->input("time"),
            "remark" => $request->input("remark")
        ]);

        $reservation->save();

       echo "Reservation has been succesfully made";
        sleep(3);
        return redirect()->away('/reservation');
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