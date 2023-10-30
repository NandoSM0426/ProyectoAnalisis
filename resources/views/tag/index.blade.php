@extends('layouts.app')

@section('content')
<div class="container">

<a href= "{{ url('tag/create') }}"> Crear nuevo tag </a>
<thead class="thead-light">
    <table>
        <tr>
            <th>Id    </th>
            <th>Nombre</th>
            <th>Tipo</th>
            <br>
            <th>Acciones</th>
        </tr>
</thead>
<tbody>
    @foreach($tags as $tag)
    <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->Nombre}}</td>
        <td>{{$tag->Tipo}}</td>

        <td>Editar | Eliminar</td>

    </tr>
    @endforeach
</tbody>
</table>

</div>
@endsection 