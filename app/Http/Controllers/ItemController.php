<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function read() 
    {
        return view('Armor.read');
    }

    public function create()
    {
        return view('Armor.create');
    }
    public function store(Request $request) 
    {
        $item = new Item();
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->metodo_obtencion = $request->metodo_obtencion;
        $item->rareza = $request->rareza;

        $item->save();

        return redirect('/items');
    }

    public function update() 
    {
        return view('Armor.update');
    }

    public function delete() 
    {
        return view('Armor.delete');
    }
}
