@extends('layouts.app')

@section('title', 'employee Edit')

@section('content')

{!! Form::model($employee, ['route' => ['employees.update', $employee], 'method' => 'PUT', 'files' => true ]) !!}

<p>Formulario para Editar un Empleado </p>

@include('layouts.form')

<!-- Submit Field -->
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@endsection
