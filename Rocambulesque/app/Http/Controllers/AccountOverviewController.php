<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountOverviewController extends Controller
{
    public function show()
    {
        return view('account_overzicht');
    }
    
    public function get()
    {
        return view('account_overzicht', [
            "name" => "Maurits van der Holst",
            "phone" => 0655223166,
            "email" => "lolligesmaus@live.nl",
            "password" => "hihihaha12!"
        ]);
    }
}
