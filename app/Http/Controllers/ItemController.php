<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function read() 
    {
        return view('Item.read');
    }

    public function create()
    {
        return view('Item.create');
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
