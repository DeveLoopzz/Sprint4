<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use App\Models\armorHaveItem;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
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

        $validatedDataArmor = $request->validate([
            'nombre' => 'required|string|max:255',
            'rareza' => 'required',
            'tipo' => 'required',
            'armadura' => 'required|integer|min:0|max:200',
            'res_fuego' => 'required|integer|min:-5|max:5',
            'res_agua' => 'required|integer|min:-5|max:5',
            'res_rayo' => 'required|integer|min:-5|max:5',
            'res_hielo' => 'required|integer|min:-5|max:5',
            'res_draco' => 'required|integer|min:-5|max:5',
            'Socket_1' => 'nullable|integer|min:1',
            'Socket_2' => 'nullable|integer|min:1',
            'Socket_3' => 'nullable|integer|min:1',
        ]);

        $armor = Armor::create([
            'nombre' => $validatedDataArmor['nombre'],
            'rareza' => $validatedDataArmor['rareza'],
            'tipo' => $validatedDataArmor['tipo'],
            'armadura' => $validatedDataArmor['armadura'],
            'res_fuego' => $validatedDataArmor['res_fuego'],
            'res_agua' => $validatedDataArmor['res_agua'],
            'res_rayo' => $validatedDataArmor['res_rayo'],
            'res_hielo' => $validatedDataArmor['res_hielo'],
            'res_draco' => $validatedDataArmor['res_draco'],
            'Socket_1' => $validatedDataArmor['Socket_1'] ?? null,
            'Socket_2' => $validatedDataArmor['Socket_2'] ?? null,
            'Socket_3' => $validatedDataArmor['Socket_3'] ?? null,
        ]);

        $validatedDataItems = $request->validate([
        'item_1' => 'required|distinct|different:item_2,item_3,item_4',
        'quantity_1' => 'required|integer|min:1',
        'item_2' => 'required|distinct|different:item_1,item_3,item_4',
        'quantity_2' => 'required|integer|min:1',
        'item_3' => 'required|distinct|different:item_1,item_2,item_4',
        'quantity_3' => 'required|integer|min:1',
        'item_4' => 'required|distinct|different:item_1,item_2,item_3',
        'quantity_4' => 'required|integer|min:1',
        ]);

        $armorHaveItems_1 = armorHaveItem::create([
            'armor_id' => $armor->id,
            'item_id' => $validatedDataItems['item_1'],
            'quantity' => $validatedDataItems['quantity_1'],
        ]);
        $armorHaveItems_2 = armorHaveItem::create([
            'armor_id' => $armor->id,
            'item_id' => $validatedDataItems['item_2'],
            'quantity' => $validatedDataItems['quantity_2'],
        ]);
        $armorHaveItems_3 = armorHaveItem::create([
            'armor_id' => $armor->id,
            'item_id' => $validatedDataItems['item_3'],
            'quantity' => $validatedDataItems['quantity_3'],
        ]);
        $armorHaveItems_4 = armorHaveItem::create([
            'armor_id' => $armor->id,
            'item_id' => $validatedDataItems['item_4'],
            'quantity' => $validatedDataItems['quantity_4'],
        ]);
    

        // //ARMOR SAVE
        // $armor = new Armor();
        // $armor->nombre = $request->nombre;
        // $armor->rareza = $request->rareza;
        // $armor->tipo = $request->tipo;
        // $armor->armadura = $request->armadura;
        // $armor->res_fuego = $request->res_fuego;
        // $armor->res_agua = $request->res_agua;
        // $armor->res_rayo = $request->res_rayo;
        // $armor->res_hielo = $request->res_hielo;
        // $armor->res_draco = $request->res_draco;
        // $armor->Socket_1 = $request->Socket_1;
        // $armor->Socket_2 = $request->Socket_2;
        // $armor->Socket_3 = $request->Socket_3;
        // $armor->save();

        // //ITEM_1 SAVING
        // $armorItem_1->armor_id = $armor->id;
        // $armorItem_1->item_id = $request->item_1;
        // $armorItem_1->quantity = $request->quantity_1;
        // $armorItem_1->save();

        // //ITEM_2 SAVING
        // $armorItem_2->armor_id = $armor->id;
        // $armorItem_2->item_id = $request->item_2;
        // $armorItem_2->quantity = $request->quantity_2;
        // $armorItem_2->save();

        // //ITEM_3 SAVING
        // $armorItem_3->armor_id = $armor->id;
        // $armorItem_3->item_id = $request->item_3;
        // $armorItem_3->quantity = $request->quantity_3;
        // $armorItem_3->save();

        // //ITEM_4 SAVING
        // $armorItem_4->armor_id = $armor->id;
        // $armorItem_4->item_id = $request->item_4;
        // $armorItem_4->quantity = $request->quantity_4;
        // $armorItem_4->save();

        return redirect('/armors');
    }

    public function update() 
    {
        return view('Armor.update');
    }

    public function delete($id) 
    {
        $armor = Armor::findOrFail($id);
        return view('Armor.delete', compact('armor'));
    }

    public function destroy($id)
    {
        $armorDelete = Armor::findOrFail($id);
        $armorDelete->delete();
        return redirect('/armors');
    }
}
