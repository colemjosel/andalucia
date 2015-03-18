@extends('ecommerce.layout')

@section('cart')

<ngcart-cart></ngcart-cart>

<!--a href="{{ route('checkout') }}">Generar comprobante</a-->

<ngcart-checkout service="http" settings="{ url:'checkout' }">Generar comprobante</ngcart-checkout>

<div id="message"></div>

@stop