@extends('ecommerce.layout')

@section('scripts')

{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/dist/ngCart.js')}}
{{HTML::script('js/cart.js')}}
{{HTML::style('css/cart.css')}}

@endsection

@section('cart')

        @foreach($productos as $prod)
            <div class="producto">
                <h1><a href="{{ route('producto',[$prod->id]) }}"> {{$prod->titulo}}</a></h1>
                <div class="img_product">
                    <img src="http://localhost/andalucia/public/img/{{$prod->imagen}}" alt="{{$prod->titulo}}" />
                </div>
                <div class="costo">
                    {{$prod->costo}}
                </div>
                <div class="tools">
                    <ngcart-addtocart id="{{ $prod->id }}" name="{{ $prod->titulo }}" price="{{ $prod->costo }}" quantity="1" quantity-max="5" data="item" userpoints="500">Añadir al carrito</ngcart-addtocart>
                </div>
            </div>
        @endforeach

@stop