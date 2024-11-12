<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'metodo_obtencion',
        'rareza',
    ];

    public function armors()
    {
        return $this->belongsToMany(Armor::class, 'armor_have_item')
                    ->withPivot('quantity');
    }

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
