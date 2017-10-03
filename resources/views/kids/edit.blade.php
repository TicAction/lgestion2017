@extends('layouts.app')
@section('content')

    <h2>Ajouter un élève</h2>

    {!! Form::model($kid,['route'=>['kid_update',$kid->id],'class'=>'form-horizontal','method'=>'PUT']) !!}

    <div class="form-group">
        {!! Form::label('firstname',"Prénom de l'enfant") !!}
        {!! Form::text('firstname',$kid->firstname,['class'=>'form-control','placeholder'=>'Prénom']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname',"Nom de famille de l'enfant") !!}
        {!! Form::text('lastname',$kid->lastname,['class'=>'form-control','placeholder'=>'Nom de famille']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('anniversary',"Date anniversaire") !!}
        {!! Form::text('anniversary',$kid->anniversary,['class'=>'form-control','id' => 'datepicker']) !!}
    </div>

    {!! Form::submit('Modifier les informations',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection