@extends('layouts.projects')

@section('title', "Tutti i progetti")

@section('content')

<div class="d-flex my-3 justify-content-end">
    <a href="{{route("projects.create")}}" class="btn btn-primary">Aggiungi un progetto</a>
</div>

    <table class="table table-secondary">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Periodo</th>
                <th>Riassunto</th>
                <th colspan="2" ></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>
                        @if (!$project->client)
                            Nessun Cliente 
                        @endif
                    </td>
                    <td>{{$project->worked_on_date}}</td>
                    <td>{{$project->content}}</td>
                    <td>
                            <a class="btn btn-outline-dark" href="{{route("projects.show", $project)}}">Visualizza</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route("projects.update", $project)}}">Modifica</a>
                    </td>
                </tr>
            @endforeach                
        </tbody>
    </table>

@endsection