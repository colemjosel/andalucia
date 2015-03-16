@extends('layout')


@section('content')
<div ng-app="CarritoApp" ng-controller="cart">


    <a ui-sref="site.summary" style="padding: 5px 0 0 0; width:150px" href="{{ route('summary') }}">
        <ngcart-summary></ngcart-summary>
    </a>

    {{$categoryfilter}}

    @yield('cart')
</div>


@yield('scripts')

@stop
