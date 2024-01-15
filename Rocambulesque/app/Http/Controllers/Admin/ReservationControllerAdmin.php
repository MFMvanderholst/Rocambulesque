<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\ReservationModel;

class ReservationControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = ReservationModel::all();
        return view('admin.reservations.index', ['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $reservations = ReservationModel::with('user')->get();

        return view('admin.reservations.show', ['data' => $reservations]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ReservationModel::findorfail($id);

        return view('admin.reservations.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        return redirect('admin/reservation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = ReservationModel::destroy($id);
        if ($result) {
            return redirect('admin/reservation')->with("status", "De Rij is verwijderd");
        } else {
            return redirect('admin/reservation')->with("status", "De Rij is niet verwijderd");
        }
    }
    // public function view()
    // {
    //     $reservation = Reservation::all();
    //     return view('admin.reservations.index', ['reservation' => $reservation]);
    // }
}
