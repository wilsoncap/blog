@extends('layouts.plantilla')


@section('tittle', 'Curso' . $curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{ route('cursos.index')}}">Volver a cursos</a><br>
    <a href="{{ route('cursos.edit', $curso)}}">Editar Curso</a>
    <p>Categoria: <strong>{{$curso->categoria}}</strong></p>
    <p>{{$curso->description}}</p>
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        {{-- para pasar el token y em metodo real que es el delete, usamos las etiquetas de blade --}}
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
