<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = Menu::all();
        return view('menu', ['data' => $data]);
    }

    public function create() {
        //
    }

    public function store() {
        //
    }

    public function edit() {
        //
    }

    public function update() {
        //
    }

    public function destroy() {
        //
    }
}
