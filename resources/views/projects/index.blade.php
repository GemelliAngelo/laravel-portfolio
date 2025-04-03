@extends('layouts.projects')

@section('title', "Tutti i progetti")

@section('content')

    <table class="table table-secondary">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Periodo</th>
                <th>Riassunto</th>
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
                </tr>
            @endforeach                
        </tbody>
    </table>

@endsection