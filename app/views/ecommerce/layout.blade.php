@extends('layout')

@section('scripts')


{{HTML::script('js/scroll/jquery.waypoints.min.js')}}
{{HTML::script('js/scroll/shortcuts/infinite.min.js')}}

{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/dist/ngCart.js')}}
{{HTML::script('js/cart.js')}}
{{HTML::style('css/cart.css')}}



@endsection

@section('content')
<div ng-app="CarritoApp" ng-controller="cart">

	<header>
		<div class="logo left">
			<a href="{{ route('home') }}">Andalucía Logo</a>
		</div>
		<div class="catFilter left">
	    	{{$categoryfilter}}
	    </div>


	    <div class="summary right">
		    <a ui-sref="site.summary" style="padding: 5px 0 0 0; width:150px" href="{{ route('summary') }}">
		        <div class="left"><ngcart-summary></ngcart-summary></div>
		        <div class="button tiny reclamar right">Reclamar mis premios</div>
		    </a>
		</div>
		
	    <div class="userInfo right">

	    	<a href="#" class="button split tiny">
	    		<div class="Avatar left" style="background-image:url({{ route('home') }}/img/avatars/nicolas.jpg);">
		    	</div>
		    	<div class="userData left">
		    		<div class="name"><i>Bienvenido</i> <b>Nicolás</b></div>
		    		<div class="userPoints"><i>Tienes <b>2000</b> puntos</i></div>
		    	</div>
	    		<span data-dropdown="drop"></span>
	    	</a><br>
			<ul id="drop" class="f-dropdown" data-dropdown-content>
			  <li><a href="#">Editar mi pefil</a></li>
			</ul>
				    </div>
	</header>
	<section class="contenido">
    	@yield('cart')
    </section>
    <footer>
    	<div class="logo">
			<a href="{{ route('home') }}">Andalucía Logo</a>
		</div>

		<dl class="sub-nav">
		  <dd><a href="#">¿Quienes Sómos?</a></dd>
		  <dd><a href="#">Téminos Legales</a></dd>
		  <dd><a href="#">¿Cómo reclamar los premios?</a></dd>
		</dl>
    	
    </footer>
</div>

@stop
