@extends('layouts.app')

@section('title','Positions ')

@section('content')


        <title>Prueba Tesis @yield('name')</title>


            <p>Listado de Cargos</p>
            @foreach($positions as $position)
            <ul>
                <li><label>id del Cargo:_</label>{{ $position->id }}</li>
                <li><label>Nombre del Cargo:_ </label>{{ $position->name }}</li>
                <li><label>slug del Cargo:_ </label>{{ $position->slug }}</li>
                    @foreach ($position->employees as $employee)
                        <li><label>Empleado del Cargo:_</label>{{ $position->name }}</li>
                    @endforeach
                    <a href="/positions/{{$position->slug}}" class="btn btn-primary">More..</a>
            </ul>
            @endforeach

@endsection


