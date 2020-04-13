@extends('layout')

@section('contenu')
@foreach($decks as $deck)
	<h1> Deck  {{$deck->name}} </h1>
	<div class="container">
		<div class="card-columns">
				@foreach($cards as $card)
					@if($deck->carte_1 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_2 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_3 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_4 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_5 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_6 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_7 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_8 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_9 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_10 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_11 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_12 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_13 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_14 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
					@if($deck->carte_15 == $card->id)
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
					    	
					  		</ul>
						</div>
						@endif
					@endif
				@endforeach
		</div>
	</div>
	@endforeach
@endsection