@extends('layouts.projects')

@section("title", $project->name)

@section('content')
    
    <div class="d-flex justify-content-end gap-3">
        <a href="{{route("projects.edit",$project)}}" class="btn btn-warning">Modifica</a>
        <form action="{{route("projects.destroy",$project)}}" method="POST">
            @csrf
            @method("DELETE")

            <input type="submit" value="Elimina Progetto" class="btn btn-danger">

        </form>
    </div>

    <h2 class="my-3">
        {{$project->client?? "Nessun Cliente"}}
    </h2>


    <small>{{$project->worked_on_date}}</small>

    <p>{{$project->content}}</p>

    <a href="{{route("projects.index")}}">Tutti i progetti</a>

@endsection