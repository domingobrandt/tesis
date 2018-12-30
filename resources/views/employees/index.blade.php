@extends('layouts.app')

@section('title','Employees ')

@section('content')


        <title>Prueba Tesis @yield('name')</title>


            <p>Listado de Empleados</p>
            @foreach($employees as $employee)
            <ul>
                <li><label>id del empleado:_</label>{{ $employee->id }}</li>
                <li><label>Nombre del empleado:_ </label>{{ $employee->name }}</li>
                <li><label>slug del empleado:_ </label>{{ $employee->slug }}</li>
                    @foreach ($employee->positions as $position)
                        <li><label>Cargo del Empleado:_</label>{{ $position->name }}</li>
                    @endforeach
                    <a href="/employees/{{$employee->slug}}" class="btn btn-primary">More..</a>
            </ul>
            @endforeach

@endsection


