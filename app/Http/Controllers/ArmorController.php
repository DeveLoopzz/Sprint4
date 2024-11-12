<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use App\Models\armorHaveItem;
use App\Models\Item;
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
        $itemList = Item::all();
        $armorType = Armor::getPart();
        $armorRarity = Armor::getRareza();
        return view('Armor.create', compact('armorType', 'armorRarity', 'itemList'));
    }

    public function store(Request $request)
    {
        $armorItem_1 = new armorHaveItem();
        $armorItem_2 = new armorHaveItem();
        $armorItem_3 = new armorHaveItem();
        $armorItem_4 = new armorHaveItem();

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

        $armorItem_1->armor_id = $armor->id;
        $armorItem_1->item_id = $request->item_1;
        $armorItem_1->quantity = $request->quantity_1;
        $armorItem_1->save();

        $armorItem_2->armor_id = $armor->id;
        $armorItem_2->item_id = $request->item_2;
        $armorItem_2->quantity = $request->quantity_2;
        $armorItem_2->save();

        $armorItem_3->armor_id = $armor->id;
        $armorItem_3->item_id = $request->item_3;
        $armorItem_3->quantity = $request->quantity_3;
        $armorItem_3->save();

        $armorItem_4->armor_id = $armor->id;
        $armorItem_4->item_id = $request->item_4;
        $armorItem_4->quantity = $request->quantity_4;
        $armorItem_4->save();

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
