<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/creation', 'CartesController@formulaire');
Route::post('/creation', 'CartesController@traitement');

Route::get('/utilisateurs', 'UtilisateursController@liste');

Route::get('/cartes', 'CartesController@liste');
Route::get('/decks', 'CartesController@listedeck');

Route::post('/supprimer_carte', 'CartesController@supprimer');
Route::post('/redirect_modifier', 'CartesController@redirectmodifier');
Route::post('/modifierok', 'CartesController@modifier');


Route::get('/mon_compte', 'CompteController@accueil');
Route::get('/deconnexion', 'CompteController@deconnexion');