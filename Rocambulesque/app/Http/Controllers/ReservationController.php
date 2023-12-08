<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $reservations = ReservationModel::with('user')->get();

        return view('reservation_listing', [
            "reservations" => $reservations
        ]);
    }

    public function show($id, $user_id)
    {
        $users = User::findorfail($id);
        $reservations = ReservationModel::findorfail($user_id);
        
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

            $validatedData['user_id'] = $request->user()->id;
            
            $reservation = new ReservationModel($validatedData);
            $reservation->save();

            return redirect('reservation/listing')->with('success', 'Reservation has been successfully made');
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

        return redirect('/reservation/listing')->with('status', 'Data is bijgewerkt');
    }

    // public function destroy($id)
    // {
    //     $reservation = ReservationModel::findOrFail($id);
    //     $reservation->delete();

    //     return redirect('/reservation')->with('status', 'Data is verwijderd');
    // }

    public function destroy(string $id)
    {
        $reservation = ReservationModel::destroy($id);
        if ($reservation) {
            return redirect('/reservation/listing')->with("status", "De Rij is verwijderd");
        } else {
            return redirect('admin/menus')->with("status", "De Rij is niet verwijderd");
        }
    }
}
