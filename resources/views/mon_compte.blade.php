@extends('layout')

@section('contenu')
	<p>Mon compte</p>
	<div class="container">
		<div class="card-deck">
	                <div class="card">
	                    <div class="card-header">En-tête de la première carte</div>
	                    <div class="card-body">
	                        <h3 class="card-title">Titre de la première carte</h3>
	                        <p class="card-text">Une ligne de texte dans notre première carte.</p>
	                        <p class="card-text"><small class="text-muted">Ligne de texte supplémentaire</small></p>
	                    </div>
	                    <div class="card-footer">En-tête de la première carte</div>
	                </div>
	                <div class="card">
	                    <div class="card-header">En-tête de la seconde carte</div>
	                    <div class="card-body">
	                        <h3 class="card-title">Titre de la seconde carte</h3>
	                        <p class="card-text">Une ligne de texte dans notre seconde carte.</p>
	                    </div>
	                    <div class="card-footer">Pied de la seconde carte</div>
	                </div>
	    </div>
	</div>
	<a href="/deconnexion">Déconnexion</a>

@endsection