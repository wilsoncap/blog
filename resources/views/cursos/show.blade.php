@extends('layouts.plantilla')


@section('tittle', 'Curso' . $curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{ route('cursos.index')}}">Volver a cursos</a>
    <p>Categoria: <strong>{{$curso->categoria}}</strong></p>
    <p>{{$curso->description}}</p>
@endsection
