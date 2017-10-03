@extends('layouts.app')
@section('content')

<h2>Ajouter un élève</h2>

    {!! Form::open(['route'=>'kid_store','class'=>'form-horizontal']) !!}

<div class="form-group">
    {!! Form::label('firstname',"Prénom de l'enfant") !!}
    {!! Form::text('firstname','',['class'=>'form-control','placeholder'=>'Prénom']) !!}
</div>
<div class="form-group">
    {!! Form::label('lastname',"Nom de famille de l'enfant") !!}
    {!! Form::text('lastname','',['class'=>'form-control','placeholder'=>'Nom de famille']) !!}
</div>
<div class="form-group">
    {!! Form::label('anniversary',"Date anniversaire") !!}
    {!! Form::text('anniversary','',['class'=>'form-control','id' => 'datepicker']) !!}
</div>

{!! Form::submit('Soumettre les informations',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection