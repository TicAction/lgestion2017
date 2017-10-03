@extends('layouts.app')
@section('content')

    <h2>Ajouter un élève</h2>

    {!! Form::model($kid,['route'=>['kid_update',$kid->id],'class'=>'form-horizontal','method'=>'PUT']) !!}

    <div class="form-group">
        {!! Form::label('behavior',"Comportement observer") !!}
        {!! Form::text('behavior','',['class'=>'form-control','placeholder'=>'Comportement observer']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('reason',"Circonstance ou endroit du comportement") !!}
        {!! Form::textarea('reason','',['class'=>'form-control ','placeholder'=>'Circonstance ou endroit du comportement']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('behave_date',"Date du comportement") !!}
        {!! Form::text('behave_date','',['class'=>'form-control','id' => 'datepicker']) !!}
    </div>

    {!! Form::submit('Modifier les informations',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection