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

        if($validatedDataArmor){
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
        }   

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

        if($validatedDataItems) 
        {       
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
    }

        return redirect('/armors');
    }

    public function update($id) 
    {
        $itemList = Item::all();
        $armorType = Armor::getPart();
        $armorRarity = Armor::getRareza();
        $armor = Armor::with('items')->findOrFail($id);
        return view('Armor.update', compact('armor', 'itemList', 'armorType', 'armorRarity'));
    }

    public function confirmUpdate(Request $request, $id) 
    {
        $armor = Armor::findOrFail($id);
        //VALIDACIONES ARMOR
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
        //VALIDACIONES ITEMS
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

        $armor->update($validatedDataArmor);

        $armor->items()->sync([
            $request->item_1 => ['quantity' => $request->quantity_1],
            $request->item_2 => ['quantity' => $request->quantity_2],
            $request->item_3 => ['quantity' => $request->quantity_3],
            $request->item_4 => ['quantity' => $request->quantity_4],
        ]);
        
        if ($armor->items->contains($request->item_1)) {
            $armor->items()->updateExistingPivot($request->item_1, ['quantity' => $request->quantity_1]);
        } else {
            $armor->items()->detach($request->item_1); 
            $armor->items()->attach($request->item_1, ['quantity' => $request->quantity_1]);
        }

        if ($armor->items->contains($request->item_2)) {
            $armor->items()->updateExistingPivot($request->item_2, ['quantity' => $request->quantity_2]);
        } else {
            $armor->items()->detach($request->item_2); 
            $armor->items()->attach($request->item_2, ['quantity' => $request->quantity_2]);
        }

        if ($armor->items->contains($request->item_3)) {
            $armor->items()->updateExistingPivot($request->item_3, ['quantity' => $request->quantity_3]);
        } else {
            $armor->items()->detach($request->item_3); 
            $armor->items()->attach($request->item_3, ['quantity' => $request->quantity_3]);
        }

        if ($armor->items->contains($request->item_4)) {
            $armor->items()->updateExistingPivot($request->item_4, ['quantity' => $request->quantity_4]);
        } else {
            $armor->items()->detach($request->item_4); 
            $armor->items()->attach($request->item_4, ['quantity' => $request->quantity_4]);
        }
        return redirect('/armors');
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
