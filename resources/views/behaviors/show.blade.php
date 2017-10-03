@extends('layouts.app')
@section('content')


<h2>Fiche de {{$kid->fullname}}</h2>
<div class="panel">
    Date de naissance : {{$kid->anniversary}}
    <br>
    Nom de l'enseignant(e) : {{Auth::user()->name}}
</div>
@endsection