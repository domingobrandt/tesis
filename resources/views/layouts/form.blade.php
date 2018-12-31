<!-- name Field -->
<div class="form-group">
    {!! Form::label('name', 'name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group">
    {!!Form::label('slug','Slug')!!}
    {!!Form::text('slug',null,['class'=>'form-control'])!!}
 </div>

 <!-- bio Field -->
<div class="form-group">
        {!!Form::label('bio','Descripcion')!!}
        {!!Form::text('bio',null,['class'=>'form-control'])!!}
</div>

 <!-- avatar Field -->
<div class="form-group">
    {!!Form::label('avatar','Avatar')!!}
    {!!Form::file('avatar',['class' => 'btn btn'])!!}
</div>
 <!-- Cargo Field -->

<div class="form-group">
    {!! Form::label('posi', 'posi:') !!}
    {!! Form::select('posi', $posi , null, ['class' => 'form-control']) !!}
</div>