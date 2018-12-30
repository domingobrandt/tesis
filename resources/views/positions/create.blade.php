@extends('layouts.app')

@section('title','Positions Create')

@section('content')

{!! Form::open(['route' => 'positions.store', 'method' => 'POST', 'files' => true ]) !!}

<!-- form Field -->
<p>Formulario para Crear un Cargo</p>

<div class="form-group">
    {!! Form::label('name', 'name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

 <!-- bio Field -->
<div class="form-group">
        {!!Form::label('bio','Descripcion')!!}
        {!!Form::text('bio',null,['class'=>'form-control'])!!}
</div>

<!-- Submit Field -->
{!! Form::submit('save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

 @endsection
<!--
    <div class="from-group">
        <label for="">Nombre Cargp</label>
        <input type="text" name="name2" class="from-control">
    </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
-->

