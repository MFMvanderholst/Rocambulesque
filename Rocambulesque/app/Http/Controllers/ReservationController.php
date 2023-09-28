<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        
    }
    
    /**
     * 
     * @param \App\Models\ReservationModel $reservation;
        @return \Illuminate\Http\Response;
     * 
     */
        
    public function edit(Reservation $reservation)
    {
        return view('be.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        // Validate the input
        $request->validate([

        ]);

        //update the changes
        $reservation->update($request->all());

        return redirect()->route('')->with('succes', 'Reservation updated succesfully');
    }
}
