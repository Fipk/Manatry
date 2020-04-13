@extends('layout')

@section('contenu')
	@if(auth()->check())
	@if(auth()->user()->admin)
	<form action="/modifierok" method="post">
		{{ csrf_field() }}
		<p style="display:none;"><input type="id" name="id" value="{{ $cards->id }}"></P>
		<p><input type="name" name="name" placeholder="Name"></P>
		<p><input type="damage" name="damage" placeholder="Damage"></p>
		<p><input type="health" name="health" placeholder="Health"></p>
		<p><input type="defense" name="defense" placeholder="Defense"></p>
		<p><input type="action" name="action" placeholder="Action"></p>
		<p><input type="race" name="race" placeholder="Race"></p>
		<p><input type="genre" name="genre" placeholder="Type"></p>
		<p><input type="description" name="description" placeholder="Description"></p>
		<p><input type="isPlayed" name="isPlayed" placeholder="isPlayed"></p>

		<p><input type="submit" value="Ajouter"></p>

	</form>
	@endif
		@endif
@endsection