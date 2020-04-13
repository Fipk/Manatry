<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartes extends Model
{
	protected $table = 'cards';
    protected $fillable = ['name', 'damage', 'health', 'defense', 'race', 'type', 'description', 'isPlayed','action'];
}
