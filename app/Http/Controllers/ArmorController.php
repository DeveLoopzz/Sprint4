<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;

class ArmorController extends Controller
{

    public function __invoke()
    {

    }
    public function read() 
    {   
        $armors = Armor::all();
        $armorType = Armor::getPart();
        $armorRarity = Armor::getRareza();
        return view('Armor.read', compact('armors', 'armorRarity','armorType'));
    }

    public function create()
    {
        $armorType = Armor::getPart();
        $armorRarity = Armor::getRareza();
        return view('Armor.create', compact('armorType', 'armorRarity'));
    }

    public function store(Request $request)
    {
        $armor = new Armor();
        $armor->nombre = $request->nombre;
        $armor->rareza = $request->rareza;
        $armor->tipo = $request->tipo;
        $armor->armadura = $request->armadura;
        $armor->res_fuego = $request->res_fuego;
        $armor->res_agua = $request->res_agua;
        $armor->res_rayo = $request->res_rayo;
        $armor->res_hielo = $request->res_hielo;
        $armor->res_draco = $request->res_draco;
        $armor->Socket_1 = $request->Socket_1;
        $armor->Socket_2 = $request->Socket_2;
        $armor->Socket_3 = $request->Socket_3;

        $armor->save();

        return redirect('/armors');
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
