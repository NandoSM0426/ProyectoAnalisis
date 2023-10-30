index puto
<thead class="thead-light">
    <table>
        <tr>
            <th>"id"</th>
            <th>Nombre:</th>
            <th>Tipo:</th>
            <th>Acciones:</th>
        </tr>
</thead>
<tbody>
    @foreach($tags as $tag)
    <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->Nombre}}</td>
        <td>{{$tag->Tipo}}</td>
        <td>Editar|Eliminar</td>

    </tr>
    @endforeach
</tbody>
</table>