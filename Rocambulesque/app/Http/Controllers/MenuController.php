<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function show()
    {
        $voorgerecht = Menu::with('getCategory')->where('menu_category_id', 1)->get();
        $hoofdgerecht = Menu::with('getCategory')->where('menu_category_id', 2)->get();
        $nagerecht = Menu::with('getCategory')->where('menu_category_id', 3)->get();
        $dranken = Menu::with('getCategory')->where('menu_category_id', 4)->get();

        return view('menu', ['voorgerecht' => $voorgerecht, 'hoofdgecht' => $hoofdgerecht, 'nagerecht' => $nagerecht, 'dranken' => $dranken]);
    }

    public function create()
    {
        //
    }

    public function store()
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

    public function destroy()
    {
        //
    }
}
