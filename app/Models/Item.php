<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    //GETTERS DE ENUMS
    public static function getMetodosObtencion()
    {
        return ['Afloramiento_minero','Pila_de_huesos','Monstruo'];
    }

    public static function getRareza()
    {
        return ['Rareza_10', 'Rareza_11', 'Rareza_12'];
    }
}
