<h4>Category Filter</h4>

<ul>
@foreach($categorias as $cat)
<li><a href="{{ route('categoria',[$cat->id]) }}">{{$cat->name}}</a></li>
@endforeach
</ul>