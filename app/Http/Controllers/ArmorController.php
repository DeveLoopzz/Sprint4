<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmorController extends Controller
{
    public function read() 
    {
        return view('Armor.read');
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
