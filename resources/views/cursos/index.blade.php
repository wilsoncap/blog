@extends('layouts.plantilla')


@section('tittle', 'cursos')

@section('content')
    <h1>Bienvenido a la pagina cursos</h1>
    <a href="{{ route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
    {{ $cursos->links()}}
@endsection




