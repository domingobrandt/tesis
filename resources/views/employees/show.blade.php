@extends('layouts.app')

@section('title', 'Employee')

@section('content')



<div class="text-center">
    <img style=" margin-top: 25px; width: 200px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="{{$employee->avatar}}" alt="{{$employee->avatar}}">
         <h5 class="card-title">{{$employee->name}}</h5>
         <p class="card-text">{{$employee->bio}}</p>

         {!! Form::open(['route' => 'employees.store']) !!}

         <div class="form-group col-sm-5; center">
             {!! Form::label('posi', 'Cargo:') !!}
             {!! Form::select('posi', $posi, null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group col-sm-12">
            {!! Form::submit('Aceptar Cargo', ['class' => 'btn btn-primary']) !!}
        </div>
          {!! Form::close() !!}
         <label>Relacion</label>
         <p class="card-text">{{$employee->positions}}</p>
         
         <a href="/employees/{{$employee->slug}}/edit" class="btn btn-primary"> Editar </a>






         {!! Form::open([ 'route' => ['employees.destroy', $employee->slug], 'method' => 'DELETE']) !!}

    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>

@endsection