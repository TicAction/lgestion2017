@extends('layouts.app')
@section('content')

<h2>Liste de jeunes de ma classe</h2>

<table class="table table-striped">
    <tr>
        <th>Prénom</th>
        <th>Nom de famille</th>
        <th>Date de naissance</th>
        <th>Âge</th>
        <th>Action</th>
    </tr>
    @foreach($kids as $kid)
    <tr>
        <td>{{$kid->firstname}}</td>
        <td>{{$kid->lastname}}</td>
        <td>{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$kid->anniversary)->format('l d F Y'))}}</td>
        <td>{{$kid->age}} ans</td>
        <td>
            {{link_to_route('kid_show','Voir',$kid->id,['class'=>'btn btn-primary btn-xs'])}}
            {{link_to_route('kid_edit','Éditer',$kid->id,['class'=>'btn btn-success btn-xs'])}}


            {!! Form::open(['method'=>'DELETE','route' => ['kid_destroy', $kid->id],'style' => 'display:inline','onsubmit'=>'return confirm("Voulez-vous vraiment détruire cette observation?")' ]) !!}
            {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}
            {!! Form::close() !!}



        </td>
    </tr>
    @endforeach
</table>

@endsection