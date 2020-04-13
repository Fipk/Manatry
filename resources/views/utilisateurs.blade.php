@extends('layout')

@section('contenu')
	<h1> les users </h1>

	<ul>
		@foreach($utilisateurs as $utilisateur)
			<li>{{ $utilisateur->email}}</li>
		@endforeach
	</ul>
	
@endsection