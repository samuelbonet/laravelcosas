@extends ("layout")
@section ("contenido")
<a href={{route("alumnos.create")}}>Crear nuevo alumno</a>
<table>
    <caption>Listado de alumnos</caption>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>DNI</th>
    </tr>
    @foreach ( $alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->direccion}}</td>
                <td>{{$alumno->dni}}</td>
                <td><a href="{{route("alumnos.edit",$alumno->id)}}">Editar</a></td>
                <td>
                    <form action="{{route("alumnos.destroy",$alumno->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>



    @endforeach
</table>
@endsection