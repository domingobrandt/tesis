@extends('layouts.app')

@section('title', 'position Edit')

@section('content')

{!! Form::model($position, ['route' => ['positions.update', $position], 'method' => 'PUT', 'files' => true ]) !!}

<p>Formulario para editar un Trabajo</p>

@include('layouts.form')

<!-- Submit Field -->
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@endsection
