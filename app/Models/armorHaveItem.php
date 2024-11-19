<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class armorHaveItem extends Model
{
    protected $table = 'armor_have_item';
    public $timestamps = false;

    protected $fillable = [
        'armor_id',
        'item_id',
        'quantity'
    ];
}
