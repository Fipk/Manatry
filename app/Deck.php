<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
	protected $table = 'deck';
    protected $fillable = ['utilisateur_id', 'carte_1', 'carte_2', 'carte_3', 'carte_4', 'carte_5', 'carte_6', 'carte_7','carte_8', 'carte_9', 'carte_10', 'carte_11', 'carte_12', 'carte_13', 'carte_14','carte_15'];
}
