@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=> null, 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:', array('class' => 'negrita')) !!}
        {!! Form::text('nombre',null,['class'=>'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tamaño', 'Tamaño:', array('class' => 'negrita')) !!}
        {!! Form::text('tamaño',null,['class'=>'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('color', 'Color:', array('class' => 'negrita')) !!}
        {!! Form::text('color',null,['class'=>'form-control', 'required' => 'required']) !!}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}
</div>
@endsection