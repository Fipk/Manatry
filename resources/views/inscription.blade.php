@extends('layout')

@section('contenu')
	<form action="/inscription" method="post">
		{{ csrf_field() }}
		<P><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></P>
		@if($errors->has('email'))
			<p>{{ $errors->first('email') }}</p>
		@endif
		<p><input type="password" name="password" placeholder="Mot de passe"></p>
		@if($errors->has('password'))
			<p>{{ $errors->first('email') }}</p>
		@endif
		<p><input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>
		@if($errors->has('password_confirmation'))
			<p>{{ $errors->first('email') }}</p>
		@endif
		<p><input type="submit" value="M'inscrire"></p>
	</form>

@endsection