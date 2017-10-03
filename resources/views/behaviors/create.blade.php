@extends('layouts.app')
@section('content')


<h2>Ajouter un comportement pour <small>Je suis l'élève</small> </h2>

    {!! Form::open(['route'=>'behavior_store','class'=>'form-horizontal']) !!}

<div class="form-group">
    {!! Form::label('behave_date',"Date du comportement") !!}
    {!! Form::text('behave_date','',['class'=>'form-control datepicker','id' => 'datepicker']) !!}
</div>

<div class="form-group">
    {!! Form::label('behavior',"Comportement observer") !!}
    {!! Form::textarea('behavior','',['class'=>'form-control','id'=>'editor1','placeholder'=>'Comportement observer']) !!}
</div>


{!! Form::submit('Soumettre le comportement',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection