@extends('layouts.plantilla')


@section('tittle', 'Cursos Edit')

@section('content')
    
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <h1>En esta pagina podras editar este curso</h1>
        <br>
        <label>
            nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            description:
            <br>
            <textarea name="description" rows="5" >{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            categotia:
            <br>
            <input type="text" name="categoria" {{$curso->categoria}}>
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
