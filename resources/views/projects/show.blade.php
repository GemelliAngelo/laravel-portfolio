@extends('layouts.projects')

@section("title", $project->name)

@section('content')
    
    <h2>
        {{$project->client?? "Nessun Cliente"}}
    </h2>

    <small>{{$project->worked_on_date}}</small>

    <p>{{$project->content}}</p>

    <a href="{{route("projects.index")}}">Torna Indietro</a>

@endsection