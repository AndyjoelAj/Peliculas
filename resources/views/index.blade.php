@extends('modelo.plantilla')

@section('title', 'Página de inicio')

@section('content')
    <h1>Bienvenidos a la página de peliculas</h1>
    <a href={{route('peliculas.create')}}>crear Peliculas</a>
    <ul>
        @foreach ($peliculas as $pelicula)
                <li>
                    <a href="{{route('peliculas.show',$pelicula->id)}}">{{$pelicula->nombre}}</a>
                </li>
            
        @endforeach
    </ul>
    {{$peliculas->links()}}


@endsection
 