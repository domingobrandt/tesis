@extends('layouts.app')

@section('title', 'Employee')

@section('content')

@include('common.success')

<div class="text-center">
<img style=" margin-top: 25px; width: 200px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="{{$employee->avatar}}" alt="{{$employee->avatar}}">
    <h5 class="card-title">{{$employee->name}}</h5>
    <p class="card-text">{{$employee->bio}}</p>
    <label>Relacion</label>
    <a href="/employee/{{$employee->slug}}/edit" class="btn btn-primary"> Editar </a>

</div>

@endsection