<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountOverviewController extends Controller
{
    public function index()
    {
        return view('account_overview');
    }
    
    public function show()
    {
        $user = User::all();
        
        return view('profile.edit', [
            "data" => $user
        ]);
    }

    public function listing()
    {
        return view('account_overview');
    }

    public function create()
    {
        return view('account_overview');
    }

    public function store()
    {
        return view('account_overview');
    }

    public function edit()
    {
        return view('account_overview');
    }
}
