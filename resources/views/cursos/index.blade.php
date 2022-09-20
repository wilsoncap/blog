@extends('layouts.plantilla')


@section('tittle', 'cursos')

@section('content')
    <h1>Bienvenido a la pagina cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{$curso->name}}</li>
        @endforeach
    </ul>
    {{ $cursos->links()}}
@endsection




