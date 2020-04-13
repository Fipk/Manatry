<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartes;
use App\Deck;

class CartesController extends Controller
{
    public function formulaire() {
    	return view('creation');
    }
    public function traitement(){
    	
    	request()->validate([
		'name' => ['required'],
		'damage' => ['required'],
		'health' => ['required'],
		'defense' => ['required'],
		'action' => ['required'],
		'race' => ['required'],
		'genre' => ['required'],
		'description' => ['required'],
		'isPlayed' => ['required'],
	]);

	Cartes::create([
		'name' => request('name'),
		'damage' => request('damage'),
		'health' => request('health'),
		'defense' => request('defense'),
		'action' => request('action'),
		'race' => request('race'),
		'type' => request('genre'),
		'description' => request('description'),
		'isPlayed' => request('isPlayed'),
	]);

	return "c'est ok";
    }

    public function liste() {

    	$cards = Cartes::all();

		return view('cartes', [
			'cards' => $cards,
		]);
    }

    public function listedeck() {

    	$cards = Cartes::all();
    	$decks = Deck::all();

		return view('decks', [
			'cards' => $cards,
			'decks' => $decks,
		]);
    }

    public function modifier() {

    	request()->validate([
    		'id' => ['required'],
			'name' => ['required'],
			'damage' => ['required'],
			'health' => ['required'],
			'defense' => ['required'],
			'action' => ['required'],
			'race' => ['required'],
			'genre' => ['required'],
			'description' => ['required'],
			'isPlayed' => ['required'],
		]);
    	$modify = Cartes::find(request('id'));

		
        $modify->Update([
            'name' => request('name'),
            'damage' => request('damage'),
            'health' => request('health'),
            'defense' => request('defense'),
            'action' => request('action'),
            'race' => request('race'),
            'genre' => request('genre'),
            'description' => request('description'),
            'isPlayed' => request('isPlayed'),
        ]);

        return ('cest ok');
    }

    public function supprimer() {

    	request()->validate([
            'id' => ['required']
        ]);
        $delete = Cartes::find(request('id'));
        $delete->delete();

    	return view('welcome');
    }

    public function redirectmodifier() {
    	request()->validate([
            'id' => ['required']
        ]);
        $renvoi = Cartes::find(request('id'));

    	return view('modifier', [
			'cards' => $renvoi,
		]);
    }
}
