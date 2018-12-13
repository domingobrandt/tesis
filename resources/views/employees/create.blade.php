@extends('layouts.app')

@section('title','Employees Create')

@section('content')

{!! Form::open(['route' => 'employees.store', 'method' => 'POST', 'files' => true  ]) !!}
<!-- form Field -->

@include('employees.form')

<!-- Submit Field -->
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

    @endsection
<!--
    <div class="from-group">
        <label for="">Nombre Cargp</label>
        <input type="text" name="name2" class="from-control">
    </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
-->

