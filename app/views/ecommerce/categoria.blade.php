@extends('layout')

@section('content')
    @foreach($productos as $prod)
	    <div>
	        <h1>{{$prod->titulo}}</h1>
	    </div>
	@endforeach

@stop