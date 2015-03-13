@extends('layout')

@section('scripts')

{{HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js')}}
{{HTML::script('dist/ngCart.js')}}
{{HTML::script('js/cart.js')}}

@endsection

@section('content')
<div ng-app="CarritoApp">
    @foreach($productos as $prod)
	    <div class="producto">
	        <h1>{{$prod->titulo}}</h1>
	        <div class="description">
	        	{{$prod->description}}
	        </div>
	        <div class="costo">
	        	{{$prod->costo}}
	        </div>
	        <div class="tools">
	        	<ngcart-addtocart id="{{ $prod->id }}" name="{{ $prod->titulo }}" price="{{ $prod->costo }}" quantity="1" quantity-max="5" data="item"></ngcart-addtocart>
	        </div>
	    </div>
	@endforeach
</div>
@stop