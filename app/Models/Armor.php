<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected $table = 'armor';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'rareza',
        'tipo',
        'armadura',
        'res_fuego',
        'res_agua',
        'res_rayo',
        'res_hielo',
        'res_draco',
        'Socket_1',
        'Socket_2',
        'Socket_3',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'armor_have_item')
                    ->withPivot('quantity');
    }

    //MUTADOR MAXIMA ARMADURA
    protected function armadura() : Attribute
    {
        return Attribute::make(
            set: function($armadura) 
            {
               return $armadura > 200 ? 200 : $armadura;
            }
        );
    }

    //GETTERS DE ENUMS
    public static function getPart() 
    {
        return['Casco', 'Pechera', 'Guantes', 'Cinturon', 'Botas'];
    }

    public static function getRareza()
    {
        return ['Rareza 10', 'Rareza 11', 'Rareza 12'];
    }

    //MUTADORES RESISTENCIAS
    protected function res_fuego(): Attribute
    {
        return Attribute::make(
            set: fn($resFuego) => $this->resRange($resFuego)
        );
    }
    protected function res_agua(): Attribute
    {
        return Attribute::make(
            set: fn($resAgua) => $this->resRange($resAgua)
        );
    }
    protected function res_rayo(): Attribute
    {
        return Attribute::make(
            set: fn($resRayo) => $this->resRange($resRayo)
        );
    }
    protected function res_hielo(): Attribute
    {
        return Attribute::make(
            set: fn($resHielo) => $this->resRange($resHielo)
        );
    }
    protected function res_draco(): Attribute
    {
        return Attribute::make(
            set: fn($resDraco) => $this->resRange($resDraco)
        );
    }

    protected function resRange($value)
    {
        //Min(5,$value) devuelve 5 si $value es mayor que 5(valor minimo) y max(-5, __lo_que_devuelva_min)
        //devolvera -5 si $value es menor
        return max(-5, min(5, $value)); 
    }
}
