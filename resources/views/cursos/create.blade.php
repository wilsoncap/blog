@extends('layouts.plantilla')


@section('tittle', 'Cursos create')

@section('content')
    
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <h1>En esta pagina podras crear cursos</h1>
        <br>
        <label>
            nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            description:
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            categotia:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
