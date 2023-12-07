<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\menu_category;
use Illuminate\Http\Request;
use App\Models\menus;
use App\Models\dish_category;

class MenuControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::with('getCategory')->get();
        return view('admin.menus.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = menu::all();
        $dish = dish_category::all();
        $caterogy = menu_category::all();
        return view('admin.menus.create', ['data' => $data, 'dish' => $dish, 'category' => $caterogy]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'naam' => "required|max:100",
        //     'beschrijving' => 'required|max:255',
        //     'prijs' => "required|integer|min:1|max:1000",
        //     'image' => 'required',
        //     'menu_category_id' => 'required|integer|min:1|max:4',
        //     'dish_id' => 'required|integer|min:1|max:4',
        // ]);
        $menus = new Menu([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'menu_category_id' => $request->input('menu_category_id'),
            'dish_id' => $request->input('dish_id'),
        ]);

        $menus->save();

        $data = menu::all();
        $dish = dish_category::all();
        $caterogy = menu_category::all();
        return view('admin.menus.index', ['data' => $data, 'dish' => $dish, 'category' => $caterogy]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = menu::findorfail($id);
        $dish = dish_category::all();
        $caterogy = menu_category::all();
        return view('admin.menus.edit', ['data' => $data, 'dish' => $dish, 'category' => $caterogy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'naam' => "max:100",
            'beschrijving' => 'max:255',
            'prijs' => "integer|min:1|max:1000",
            'menu_category_id' => 'integer|min:1|max:4',
            'dish_id' => 'integer|min:1|max:4',
        ]);

        $data = menu::findorfail($id);
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->price = $request->input('price');
        $data->menu_category_id = $request->input('menu_category_id');
        $data->dish_id = $request->input('dish_id');
        $data->save();

        return redirect("admin/menus")->with("status", 'Menu rij is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = menu::destroy($id);
        if ($result) {
            return redirect('admin/menus')->with("status", "De Rij is verwijderd");
        } else {
            return redirect('admin/menus')->with("status", "De Rij is niet verwijderd");
        }
    }
}
