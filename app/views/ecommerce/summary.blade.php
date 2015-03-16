@extends('ecommerce.layout')

@section('scripts')

{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/dist/ngCart.js')}}
{{HTML::script('js/cart.js')}}
{{HTML::style('css/cart.css')}}

@endsection

@section('cart')

<ngcart-cart></ngcart-cart>

<!--a href="{{ route('checkout') }}">Generar comprobante</a-->

<ngcart-checkout service="http" settings="{ url:'checkout' }">Generar comprobante</ngcart-checkout>

<div id="message"></div>

@stop