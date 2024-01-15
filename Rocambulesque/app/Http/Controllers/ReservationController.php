<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReservationModel;

class ReservationController extends Controller
{
    public function index_listing()
    {
        $reservations = ReservationModel::with('user')->get();

        return view('reservation_listing', [
            "reservations" => $reservations
        ]);
    }

<<<<<<< HEAD
    public function show($id, $user_id)
    {
        $users = User::findorfail($id);
        $reservations = ReservationModel::findorfail($user_id);

        return view('reservation_overview', [
            "data1" => $users,
            "data2" => $reservations
        ]);
    }

=======
>>>>>>> f7142fc246054afc7e3b603284b3dfc604cd5438
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
                'fname' => "required",
                'lname' => "required",
                'email' => "required",
                'phone' => "required",
                'mealType' => "required",
                'adults' => "required",
                'children' => "required",
                'date' => "required",
                'timeHour' => "required",
                'timeMinutes' => "required",
                'remark' => 'nullable',
            ]);
<<<<<<< HEAD

            $validatedData['user_id'] = $request->user()->id;

=======
            
>>>>>>> f7142fc246054afc7e3b603284b3dfc604cd5438
            $reservation = new ReservationModel($validatedData);
            $reservation->save();

            return redirect('reservation/create')->with('success', 'Reservation has been successfully made');
        }
    }
}
