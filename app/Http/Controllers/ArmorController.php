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
        return view('Armor.create');
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
