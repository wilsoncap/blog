@extends('layouts.plantilla')


@section('tittle', 'Curso' . $curso)

@section('content')
    <h1>Bienvenido al curso: {{$curso}}</h1>
@endsection
