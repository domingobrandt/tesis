@extends('layouts.app')

@section('title', 'employee Edit')

@section('content')


{!! Form::open(['route' => ['employee.update', $employee], 'method' => 'PUT', 'files' => true ]) !!}

@include('employees.form')

<!-- Submit Field -->
{!! Form::submit('Actulizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@endsection
