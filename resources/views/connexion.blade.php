@extends('layout')

@section('contenu')
	<form action="/connexion" method="post">
		{{ csrf_field() }}
		<P><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></P>
		@if($errors->has('email'))
			<p>{{ $errors->first('email') }}</p>
		@endif
		<p><input type="password" name="password" placeholder="Mot de passe"></p>
		@if($errors->has('password'))
			<p>{{ $errors->first('email') }}</p>
		@endif

		<p><input type="submit" value="Se connecter"></p>
	</form>

@endsection