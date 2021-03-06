<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil() {
    	if (auth()->guest()) {
    		return redirect('/connexion')->withErrors([
    			'email' => "Vous devez être connecté pour voir cette page.",
    		]);
    	}
    	return view('mon_compte');
    }

    public function deconnexion() {
    	auth()->logout();

    	return redirect('/');
    }
}
