@extends('ecommerce.layout')


@section('cart')

<div class="producto_solo row">
    <div class="img_product columns large-3">
        <img src="http://localhost/andalucia/public/img/productos/{{$producto[0]->imagen}}" alt="{{$producto[0]->titulo}}" />
    </div>
    <div class="productInfo columns large-9">
        <div class="infoText large-7 left">
            <h1>{{$producto[0]->titulo}}</h1>
            <div class="description">
                {{$producto[0]->description}}
            </div>
        </div>
        <div class="infoTools large-5 left">
            <div class="rate">
                <ngcart-rate service="http" settings="{ url:'http://localhost/andalucia/public/rate' }" valor="{{$rate}}" id="{{$producto[0]->id }}" user="1"></ngcart-rate>
            </div><br>
            <div class="costo">
                {{$producto[0]->costo}} <i>puntos</i>
            </div>
            <div class="tools productTools">
                <ngcart-addtocart id="{{ $producto[0]->id }}" name="{{ $producto[0]->titulo }}" price="{{ $producto[0]->costo }}" quantity="1" quantity-max="5" data="item" userpoints="2000" img="{{ route('home') }}/img/productos/{{$producto[0]->imagen}}">Añadir al carrito</ngcart-addtocart>
            </div>
        </div>
    </div>
</div>
<div class="row">
    {{Commentario::comments($comments, $producto[0]->id, $rate)}}
</div>
@stop