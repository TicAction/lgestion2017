@extends('layouts.app')
@section('content')

<h2>Liste des comportements</h2>

<table class="table table-striped">
    <tr>
        <th>Comportement observer</th>
        <th>Circonstance ou endroit du comportement</th>
        <th>Date du comportement</th>
        <th>Action</th>
    </tr>
    @foreach($behaviors as $behavior)
    <tr>
        <td>{{$behavior->behavior}}</td>
        <td>{{$behavior->reason}}</td>
        <td>{{$behavior->behave_date}}</td>

        <td>
            {{link_to_route('behavior_show','Voir',$behavior->id,['class'=>'btn btn-primary btn-xs'])}}
            {{link_to_route('behavior_edit','Éditer',$behavior->id,['class'=>'btn btn-success btn-xs'])}}


            {!! Form::open(['method'=>'DELETE','route' => ['behavior_destroy', $behavior->id],'style' => 'display:inline','onsubmit'=>'return confirm("Voulez-vous vraiment détruire cette observation?")' ]) !!}
            {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}
            {!! Form::close() !!}



        </td>
    </tr>
    @endforeach
</table>
@endsection