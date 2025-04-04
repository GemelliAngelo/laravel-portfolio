@extends('layouts.projects')

@section('title',"Aggiungi progetto")

@section('content')
    
    <form class="bg-secondary p-5" action="{{route("projects.store")}}" method="POST">
        @csrf

        <div class="form-control bg-body-tertiary mb-4">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>
        <div class="form-control bg-body-tertiary mb-4">
            <label class="form-label" for="client">Cliente</label>
            <input class="form-control" type="text" name="client" id="client">
        </div>
        <div class="form-control bg-body-tertiary mb-4">
            <label class="form-label" for="worked_on_date">Periodo</label>
            <input class="form-control" type="date" name="worked_on_date" id="worked_on_date" required>
        </div>
        <div class="form-control bg-body-tertiary mb-4">
            <label class="form-label" for="content">Riassunto</label>
            <textarea class="form-control" name="content" id="content" required></textarea>
        </div>

        <div class="text-end w-100">
            <input type="submit" value="Aggiungi" class="btn btn-success w-100">
        </div>

    </form>

@endsection
    