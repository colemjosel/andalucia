
<button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown tiny">Categorías</button><br>
<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
  	@foreach($categorias as $cat)
		<li><a href="{{ route('categoria',[$cat->id]) }}">{{$cat->name}}</a></li>
	@endforeach
</ul>