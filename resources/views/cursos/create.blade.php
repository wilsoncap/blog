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
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        {{-- para mostrar error --}}
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
            
        
        <br>
        <label>
            description:
            <br>
            <textarea name="description" rows="5" >{{old('description')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
