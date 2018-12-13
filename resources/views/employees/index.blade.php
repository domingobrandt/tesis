@extends('layouts.app')

@section('title','Employees ')

@section('content')


        <title>Prueba Tesis @yield('name')</title>


            <p>Listado de Empleados</p>
            @foreach($employees as $employee)
            <ol>
                <ul><label>id del empleado:_</label>{{ $employee->id }}</ul>
                <ul><label>Nombre del empleado:_ </label>{{ $employee->name }}</ul>
                <ul><label>slug del empleado:_ </label>{{ $employee->slug }}</ul>

                    @foreach ($employee->positions as $position)
                        <ul><label>Cargo del Empleado:_</label>{{ $position->name }}</ul>
                    @endforeach
            </ol>
            @endforeach

@endsection


