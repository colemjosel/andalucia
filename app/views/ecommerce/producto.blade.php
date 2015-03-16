@extends('ecommerce.layout')

@section('scripts')

{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/dist/ngCart.js')}}
{{HTML::script('js/cart.js')}}
{{HTML::style('css/cart.css')}}

@endsection

@section('cart')

<div class="producto_solo">
    <h1>{{$producto[0]->titulo}}</h1>
    <div class="img_product">
        <img src="http://localhost/andalucia/public/img/{{$producto[0]->imagen}}" alt="{{$producto[0]->titulo}}" />
    </div>
    <div class="description">
        {{$producto[0]->description}}
    </div>
    <div class="costo">
        {{$producto[0]->costo}}
    </div>
    <div class="tools">
        <ngcart-addtocart id="{{ $producto[0]->id }}" name="{{ $producto[0]->titulo }}" price="{{ $producto[0]->costo }}" quantity="1" quantity-max="5" data="item" userpoints="500">Añadir al carrito</ngcart-addtocart>
    </div>
</div>


@stop