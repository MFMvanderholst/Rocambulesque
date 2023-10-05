<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationOverviewController extends Controller
{
    public function show()
    {
        return view('reservation_overview');
    }

    public function get(Request $request)
    {
        return view('reservation_overview', [
            "name" => "Maurits van der Holst",
            "phone" => 0655223166,
            "email" => "lolligesmaus@live.nl",
            "datetime" => "2023-10-2 10:12:23",
            "amount" => 5,
            "remark" => "Bij het reserveren van dit bedrijf wil ik graag bij het raam zitten"
        ]);

        // $drinks = Grocery::all();
        // return view('drinks',["data" => $drinks]);
    }

    public function create(Request $request)
    {
        //
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
