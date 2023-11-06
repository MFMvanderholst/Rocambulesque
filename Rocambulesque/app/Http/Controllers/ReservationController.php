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

    public function index_listing()
    {
        $users = User::all();
        $reservations = ReservationModel::all();
        
        return view('reservation', [
            "data1" => $users,
            "data2" => $reservations
        ]);
    }

    public function show()
    {
        $users = User::all();
        $reservations = ReservationModel::all();
        
        return view('reservation_overview', [
            "data1" => $users,
            "data2" => $reservations
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

    public function edit($id)
    {
        $reservation = ReservationModel::findorfail($id);
        return view('edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "choice" => "required",
            "amount" => "integer",
            "date" => "required",
            "time" => "required"
        ]);

        $reservation = ReservationModel::findOrFail($id);

        $reservation->update([
            'choice' => $validatedData['choice'],
            'amount' => $validatedData['amount'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'remark' => 'remark'
        ]);
       
        return redirect('/reservation')->with('status', 'Data is bijgewerkt');
    }

    public function destroy($id)
    {
        $reservation = ReservationModel::findOrFail($id);
        $reservation->delete();

        return redirect('/reservation')->with('status', 'Data is verwijderd');
    }
}
