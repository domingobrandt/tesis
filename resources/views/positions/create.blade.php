@extends('layouts.app')

@section('title','Positions Create')

@section('content')

{!! Form::open(['route' => 'positions.store', 'method' => 'POST', 'files' => true ]) !!}
<!-- form Field -->
<p>Formulario para Crear un Trabajo</p>

@include('layouts.form')

<!-- Submit Field -->
{!! Form::submit('save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

 @endsection
