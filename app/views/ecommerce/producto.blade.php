@extends('ecommerce.layout')


@section('cart')

<div class="producto_solo">
    <h1>{{$producto[0]->titulo}}</h1>
    <div class="img_product">
        <img src="http://localhost/andalucia/public/img/productos/{{$producto[0]->imagen}}" alt="{{$producto[0]->titulo}}" />
    </div>
    <div class="description">
        {{$producto[0]->description}}
    </div>
    <div class="rate">
        <ngcart-rate service="http" settings="{ url:'http://localhost/andalucia/public/rate' }" valor="{{$rate}}" id="{{$producto[0]->id }}" user="1"></ngcart-rate>
    </div>
    <div class="costo">
        {{$producto[0]->costo}}
    </div>
    <div class="tools">
        <ngcart-addtocart id="{{ $producto[0]->id }}" name="{{ $producto[0]->titulo }}" price="{{ $producto[0]->costo }}" quantity="1" quantity-max="5" data="item" userpoints="2000" img="{{ route('home') }}/img/productos/{{$producto[0]->imagen}}">Añadir al carrito</ngcart-addtocart>
    </div>
</div>

{{Commentario::comments($comments, $producto[0]->id)}}
@stop