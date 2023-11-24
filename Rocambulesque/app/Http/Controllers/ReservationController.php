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

        return view('reservation_listing', [
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
        return view('reservation_create');
    }


    public function store(Request $request)
    {

        if ($request->isMethod('post')) {
            // Handle the POST request for form submission
            $validatedData = $request->validate([
                'mealType' => "required",
                'adults' => "required",
                'children' => "required",
                'date' => "required",
                'timeHour' => "required",
                'timeMinutes' => "required",
                'remark' => 'nullable',
            ]);

            $reservation = new ReservationModel($validatedData);
            $reservation->save();

            return redirect('reservation')->with('success', 'Reservation has been successfully made');
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
            'mealType' => "required",
            'adults' => "required",
            'children' => 'required',
            'date' => 'required',
            'timeHour' => 'required',
            'timeMinutes' => 'required',
            'remark' => 'nullable',
        ]);

        $reservation = ReservationModel::findOrFail($id);

        $reservation->update([
            'mealType' => $validatedData['mealType'],
            'adults' => $validatedData['adults'],
            'children' => $validatedData['children'],
            'date' => $validatedData['date'],
            'timeHour' => $validatedData['timeHour'],
            'timeMinutes' => $validatedData['timeMinutes'],
            'remark' => $validatedData['remark']
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
