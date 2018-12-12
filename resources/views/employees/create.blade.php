@extends('layouts.app')

@section('title','Employees Create')

@section('content')

<form class="from-group" action="/employee" method="Post">
    @csrf
    <p>Formulario para Crear un Empleado con su trabajo</p>

    <div class="from-group">
        <label for="">Nombre</label>
        <input type="text" name="name" class="from-control">
    </div>
<!--
    <div class="from-group">
        <label for="">Nombre Cargp</label>
        <input type="text" name="name2" class="from-control">
    </div>
-->
    <div class="from-group">
        <label for="">Aqui debe Aparecer los cargos ya existente para selecionar y se guarde en la tabla pivot</label>
        <input type="select" name="" class="from-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    
    </form>

    @endsection


