<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __invoke()
    {

    }
    
    public function read() 
    {
        return view('Item.read');
    }

    public function create()
    {
        $metodosObtencion = Item::getMetodosObtencion();
        $rarezas = Item::getRarezaItem();
        return view('Item.create', compact('metodosObtencion', 'rarezas'));
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
        return view('Item.update');
    }

    public function delete() 
    {
        return view('Item.delete');
    }
}
