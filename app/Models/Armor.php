<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected $table = 'armor';

    protected function armadura() : Attribute
    {
        return Attribute::make(
            set: function($armadura) 
            {
               return $armadura > 100 ? 100 : $armadura;
            }
        );
    }

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
}
