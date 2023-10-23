<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReservationModel;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation_overview');
    }

    public function show()
    {
        $users = User::all();
        
        return view('reservation_overview', [
            "data" => $users
        ]);

        $reservation = ReservationModel::all();

        return view('reservation_overview', [
            "data" => $reservation
        ]);
    }

    public function create()
    {
        // Handle the GET request to display the form
        return view('reservation');
    }


    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            // Handle the POST request for form submission
            $validatedData = $request->validate([
                'choice' => 'required',
                'amount' => 'required|integer',
                'date' => 'required|date',
                'time' => 'required|date_format:H:i',
                'remark' => 'nullable|string',
            ]);

            $reservation = new ReservationModel($validatedData);
            $reservation->save();

            return redirect('/reservation')->with('success', 'Reservation has been successfully made');
        }
    }

    public function update()
    {
        //
    }
}
