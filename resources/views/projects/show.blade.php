@extends('layouts.projects')

@section("title", $project->name)

@section('content')
    
    <div class="d-flex justify-content-end">
        <a href="{{route("projects.edit",$project)}}" class="btn btn-warning">Modifica</a>
    </div>

    <h2 class="my-3">
        {{$project->client?? "Nessun Cliente"}}
    </h2>


    <small>{{$project->worked_on_date}}</small>

    <p>{{$project->content}}</p>

    <a href="{{route("projects.index")}}">Torna Indietro</a>

@endsection