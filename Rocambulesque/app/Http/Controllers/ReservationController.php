<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationModel;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function show()
    {
        //
    }

    public function create(Request $request)
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

        // Handle the GET request to display the form
        return view('reservation');
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
