@extends ("layout")
    @section ("contenido")
    <fieldset>
        <legend>Crear nuevo alumno</legend>
    
<form action="{{route("alumnos.store")}}" method="POST">
    @csrf
    @method("POST")
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="text" name="direccion" placeholder="Direccion">
    <input type="text" name="dni" placeholder="DNI">
    <input type="submit" value="Crear">

</form>
    </fieldset>
    @endsection