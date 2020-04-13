@extends('layout')

@section('contenu')
	<h1> les cartes </h1>
	<div class="container">
		<div class="card-columns">
			@foreach($cards as $card)
			@if ($card->race == "Aucun")
			<div class="card bg-light">
		  		<div class="card-body">
		    		<h5 class="card-title" style="color:black;">{{ $card->name}}</h5>
		    		<p class="card-text" style="color:black;">{{ $card->description}}</p>
		  		</div>
		  		<ul class="list-group list-group-flush">
		    		<li class="list-group-item">{{ $card->damage}} degats </li>
		    		<li class="list-group-item">{{ $card->health}} vie </li>
		    		<li class="list-group-item">{{ $card->defense}} defense</li>
		    		<li class="list-group-item">{{ $card->action}} actions</li>
		    		<li class="list-group-item">Race: {{ $card->race}}        Type: {{ $card->type}}</li>
		    		@if(auth()->check())
		    		@if (auth()->user()->admin)
                            <li class="list-group-item">
                            	<form action="/supprimer_carte" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="supprimer">
	    					</form></li>
                            <li class="list-group-item">
                            	<form action="/redirect_modifier" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="modifier">
	    					</form></li>
                    @endif
		    		@endif
		  		</ul>
			</div>
			@elseif ($card->race == "Brutes")
			<div class="card bg-danger">
		  		<div class="card-body">
		    		<h5 class="card-title" style="color:black;">{{ $card->name}}</h5>
		    		<p class="card-text" style="color:black;">{{ $card->description}}</p>
		  		</div>
		  		<ul class="list-group list-group-flush">
		    		<li class="list-group-item">{{ $card->damage}} degats </li>
		    		<li class="list-group-item">{{ $card->health}} vie </li>
		    		<li class="list-group-item">{{ $card->defense}} defense</li>
		    		<li class="list-group-item">{{ $card->action}} actions</li>
		    		<li class="list-group-item">Race: {{ $card->race}}        Type: {{ $card->type}}</li>
		    		@if(auth()->check())
		    		@if (auth()->user()->admin)
                            <li class="list-group-item">
                            	<form action="/supprimer_carte" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="supprimer">
	    					</form></li>
                            <li class="list-group-item">
                            	<form action="/redirect_modifier" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="modifier">
	    					</form></li>
                    @endif
		    		@endif
		  		</ul>
			</div>
			@elseif ($card->race == "Eternels")
			<div class="card bg-warning">
		  		<div class="card-body">
		    		<h5 class="card-title" style="color:black;">{{ $card->name}}</h5>
		    		<p class="card-text" style="color:black;">{{ $card->description}}</p>
		  		</div>
		  		<ul class="list-group list-group-flush">
		    		<li class="list-group-item">{{ $card->damage}} degats </li>
		    		<li class="list-group-item">{{ $card->health}} vie </li>
		    		<li class="list-group-item">{{ $card->defense}} defense</li>
		    		<li class="list-group-item">{{ $card->action}} actions</li>
		    		<li class="list-group-item">Race: {{ $card->race}}        Type: {{ $card->type}}</li>
		    		@if(auth()->check())
		    		@if (auth()->user()->admin)
                            <li class="list-group-item">
                            	<form action="/supprimer_carte" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="supprimer">
	    					</form></li>
                            <li class="list-group-item">
                            	<form action="/redirect_modifier" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="modifier">
	    					</form></li>
                    @endif
		    		@endif
		  		</ul>
			</div>
			@elseif ($card->race == "Mutants")
			<div class="card bg-success">
		  		<div class="card-body">
		    		<h5 class="card-title" style="color:black;">{{ $card->name}}</h5>
		    		<p class="card-text" style="color:black;">{{ $card->description}}</p>
		  		</div>
		  		<ul class="list-group list-group-flush">
		    		<li class="list-group-item">{{ $card->damage}} degats </li>
		    		<li class="list-group-item">{{ $card->health}} vie </li>
		    		<li class="list-group-item">{{ $card->defense}} defense</li>
		    		<li class="list-group-item">{{ $card->action}} actions</li>
		    		<li class="list-group-item">Race: {{ $card->race}}        Type: {{ $card->type}}</li>
		    		@if(auth()->check())
		    		@if (auth()->user()->admin)
                            <li class="list-group-item">
                            	<form action="/supprimer_carte" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="supprimer">
	    					</form></li>
                            <li class="list-group-item">
                            	<form action="/redirect_modifier" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="modifier">
	    					</form></li>
                    @endif
		    		@endif
		  		</ul>
			</div>
			@elseif ($card->race == "Defenseurs")
			<div class="card bg-info">
		  		<div class="card-body">
		    		<h5 class="card-title" style="color:black;">{{ $card->name}}</h5>
		    		<p class="card-text" style="color:black;">{{ $card->description}}</p>
		  		</div>
		  		<ul class="list-group list-group-flush">
		    		<li class="list-group-item">{{ $card->damage}} degats </li>
		    		<li class="list-group-item">{{ $card->health}} vie </li>
		    		<li class="list-group-item">{{ $card->defense}} defense</li>
		    		<li class="list-group-item">{{ $card->action}} actions</li>
		    		<li class="list-group-item">Race: {{ $card->race}}        Type: {{ $card->type}}</li>
		    	@if(auth()->check())
		    		@if (auth()->user()->admin)
                            <li class="list-group-item">
                            	<form action="/supprimer_carte" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="supprimer">
	    					</form></li>
                            <li class="list-group-item">
                            	<form action="/redirect_modifier" method="post">
	        					{{ csrf_field() }}
	        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
	        					<input type="submit" class="btn btn-primary" value="modifier">
	    					</form></li>
                    @endif
		    		@endif
		  		</ul>
			</div>
			@elseif ($card->race == "Vampires")
			<div class="card bg-primary">
		  		<div class="card-body">
		    		<h5 class="card-title" style="color:black;">{{ $card->name}}</h5>
		    		<p class="card-text" style="color:black;">{{ $card->description}}</p>
		  		</div>
		  		<ul class="list-group list-group-flush">
		    		<li class="list-group-item">{{ $card->damage}} degats </li>
		    		<li class="list-group-item">{{ $card->health}} vie </li>
		    		<li class="list-group-item">{{ $card->defense}} defense</li>
		    		<li class="list-group-item">{{ $card->action}} actions</li>
		    		<li class="list-group-item">Race: {{ $card->race}}        Type: {{ $card->type}}</li>
			    	@if(auth()->check())
			    		@if (auth()->user()->admin)
	                            <li class="list-group-item">
	                            	<form action="/supprimer_carte" method="post">
		        					{{ csrf_field() }}
		        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
		        					<input type="submit" class="btn btn-primary" value="supprimer">
		    					</form></li>
	                            <li class="list-group-item">
	                            	<form action="/redirect_modifier" method="post">
		        					{{ csrf_field() }}
		        					<p style="display: none;"><input type="id" name="id" value="{{ $card->id }}"></p>
		        					<input type="submit" class="btn btn-primary" value="modifier">
		    					</form></li>
	                    @endif
			    		@endif
		  		</ul>
			</div>
			@endif
			@endforeach
		</div>
	</div>
@endsection