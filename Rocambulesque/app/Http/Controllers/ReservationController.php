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
        $reservation = new ReservationModel();
        $data = [
            $choice = "",
            $amount = "",
            $date = "",
            $time = "",
            $remark = ""
        ];
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