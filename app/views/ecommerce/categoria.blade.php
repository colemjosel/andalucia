@extends('ecommerce.layout')

@section('cart')
    <div class="categoria row">
        <h1>{{$categoria[0]->name}}</h1>
        @foreach($productos as $prod)
            <div class="producto small-12 medium-4 large-2 xlarge-1 columns">
                <div class="img_product">
                    <a href="{{ route('producto',[$prod->id]) }}">
                        <img src="{{ route('home') }}/img/productos/{{$prod->imagen}}" alt="{{$prod->titulo}}" />
                    </a>
                </div>
                <div class="panel">
                    <h3><a href="{{ route('producto',[$prod->id]) }}"> {{$prod->titulo}}</a></h3>
                    <div class="rate">
                       <b>Rate:</b> {{$prod->rate}}
                    </div>
                    <div class="costo">
                        {{$prod->costo}} <i>puntos</i>
                    </div>
                </div>
                <div class="tools">
                    <ngcart-addtocart id="{{ $prod->id }}" name="{{ $prod->titulo }}" price="{{ $prod->costo }}" quantity="1" quantity-max="5" data="item" userpoints="2000"  img="{{ route('home') }}/img/{{$prod->imagen}}">
                        <div class="show-for-small-only">Añadir al carrito</div>
                        <div class="show-for-medium-up"><img src="{{ route('home') }}/img/anadir.png"></div>
                    </ngcart-addtocart>
                </div>
            </div>
        @endforeach
    </div>
@stop