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
            <input type="text" name="name" value="{{old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            description:
            <br>
            <textarea name="description" rows="5" >{{old('description', $curso->description)}}</textarea>
        </label>
        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <label>
            categotia:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
