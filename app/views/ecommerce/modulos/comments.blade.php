<h1>Componente comentarios</h1>

{{ Form::open(['route' => 'comment', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}
        {{ Field::radio('rate', '1') }}
        {{ Field::radio('rate', '2') }}
        {{ Field::radio('rate', '3') }}
        {{ Field::radio('rate', '4') }}
        {{ Field::radio('rate', '5') }}


        {{ Field::text('title') }}
        {{ Field::textarea('comment') }}

        {{ Form::hidden('user_id', '1') }}
        {{ Form::hidden('component_name', 'productos') }}
        {{ Form::hidden('component_item_id', $id) }}

        {{ Form::submit('Envíar', ['class' => 'boton']) }}
{{ Form::close() }}

@foreach($comments as $comment)
    <div>
        <p><strong>Usuario: {{$comment->username}}</strong><br>
        <strong>Rate: {{$comment->rate}}</strong><br>
        <strong>Date: {{ Str::limit($comment->created_at, 10, '') }}</strong><br>

        {{ $comment->comment}}</p>
    </div>
@endforeach
