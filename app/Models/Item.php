<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public $timestamps = false;

    //GETTERS DE ENUMS
    public static function getMetodosObtencion()
    {
        return ['Afloramiento minero','Pila de huesos','Monstruo'];
    }

    public static function getRarezaItem()
    {
        return ['Rareza 10', 'Rareza 11', 'Rareza 12'];
    }
}
