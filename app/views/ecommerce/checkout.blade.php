<h1>Comprobante</h1>

<ul>
@foreach($comprobante as $key => $comp)
	@if ($key === 'user_id')
		<li><b>User:</b> {{$comp}}</li>
	@elseif ($key === 'id')
		<li><b>ID:</b> {{$comp}}</li>
	@elseif ($key === 'totalCost')
		<li><b>Costo en puntos:</b> {{$comp}}</li>
	@elseif ($key === 'items')
		<li><b>Items:</b> {{$comp}}</li>
	@elseif ($key === 'estado')
		<li><b>Estado:</b> {{$comp}}</li>
	@endif

@endforeach
</ul>

<a href="{{ route('pdf', [$the_id])}}">Imprimir</a>
