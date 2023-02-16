@extends ("layout")
@section ("contenido")

<fieldset>
<legend>Datos del alumno</legend>
                    <form action="{{route("alumnos.update",$alumno->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    Nombre <input type="text" name="nombre" value="{{$alumno->nombre}}"><br>
                    Apellidos <input type="text" name="apellido" value="{{$alumno->apellido}}"><br>
                    Direccion <input type="text" name="direccion" value="{{$alumno->direccion}}"><br>
                    DNI <input type="text" name="dni" value="{{$alumno->dni}}"><br>
                    </form>
                </td>
            </tr>



    @endforeach
</table>
@endsection