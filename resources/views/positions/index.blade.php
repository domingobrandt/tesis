@extends('layouts.app')

@section('title','Positions ')

@section('content')


        <title>Prueba Tesis @yield('name')</title>


            <p>Listado de Empleados</p>
            @foreach($positions as $position)
            <ul>
                <li><label>id del empleado:_</label>{{ $position->id }}</li>
                <li><label>Nombre del empleado:_ </label>{{ $position->name }}</li>
                <li><label>slug del empleado:_ </label>{{ $position->slug }}</li>
                    @foreach ($position->employees as $employee)
                        <li><label>Cargo del Empleado:_</label>{{ $position->name }}</li>
                    @endforeach
                    <a href="/positions/{{$position->slug}}" class="btn btn-primary">More..</a>
            </ul>
            @endforeach

@endsection


