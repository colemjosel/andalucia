@extends('ecommerce.layout')


@section('cart')

<div class="producto_solo row">
    <div class="img_product columns large-3">
        <img src="{{ route('home') }}/img/productos/{{$producto[0]->imagen}}" alt="{{$producto[0]->titulo}}" />
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

<div class="losMasVotados categoria row">
    <h4>Los más votados</h4>
    @foreach($masvotados as $index => $prod)
        @if($index < 6)
            <div class="producto small-12 medium-4 large-2 xlarge-1 columns infinite-item">
                <div class="img_product">
                    <a href="{{ route('producto',[$prod->id]) }}">
                        <img src="{{ route('home') }}/img/productos/{{$prod->imagen}}" alt="{{$prod->titulo}}" />
                    </a>
                </div>
                <div class="panel">
                    <h3><a href="{{ route('producto',[$prod->id]) }}"> {{$prod->titulo}}</a></h3>
                    <div class="rate">
                        <ngcart-rate service="http" settings="{ url:'http://localhost/andalucia/public/rate' }"  valor="{{$prod->rate}}" id="{{ $prod->id }}" user="1"></ngcart-rate>
                    </div>
                    <div class="costo">
                        {{$prod->costo}} <i>puntos</i>
                    </div>
                </div>
                <div class="tools">
                    <ngcart-addtocart id="{{ $prod->id }}" name="{{ $prod->titulo }}" price="{{ $prod->costo }}" quantity="1" quantity-max="5" data="item" userpoints="2000"  img="{{ route('home') }}/img/productos/{{$prod->imagen}}">
                        <div class="show-for-small-only">Añadir al carrito</div>
                        <div class="show-for-medium-up"><img src="{{ route('home') }}/img/anadir.png"></div>
                    </ngcart-addtocart>
                </div>
            </div>
        @endif
    @endforeach
</div>

@stop