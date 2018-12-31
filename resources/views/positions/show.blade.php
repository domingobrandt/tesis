@extends('layouts.app')

@section('title', 'Positions')

@section('content')



<div class="text-center">
    <img style=" margin-top: 25px; width: 200px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$position->avatar}}" alt="{{$position->avatar}}">
         <h5 class="card-title">{{$position->name}}</h5>
         <p class="card-text">{{$position->bio}}</p>
         <label>Relacion</label>
         <p class="card-text">{{$position->employees}}</p>
         <a href="/positions/{{$position->slug}}/edit" class="btn btn-primary"> Editar </a>

         {!! Form::open([ 'route' => ['positions.destroy', $position->slug], 'method' => 'DELETE']) !!}

    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>

@endsection