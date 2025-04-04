@extends('layouts.projects')

@section('title',"Aggiungi progetto")

@section('content')
    
    <form class="p-3" action="{{route("projects.store")}}" method="post">

        <div class="form-control bg-body-tertiary mb-3">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-control bg-body-tertiary mb-3">
            <label class="form-label" for="client">Cliente</label>
            <input class="form-control" type="text" name="client" id="client">
        </div>
        <div class="form-control bg-body-tertiary mb-3">
            <label class="form-label" for="worked_on_date">Periodo</label>
            <input class="form-control" type="date" name="worked_on_date" id="worked_on_date">
        </div>
        <div class="form-control bg-body-tertiary mb-3">
            <label class="form-label" for="content">Riassunto</label>
            <textarea class="form-control" name="content" id="content"></textarea>
        </div>

        <div class="mb-3 text-end w-100">
            <input type="submit" value="Aggiungi" class="btn btn-success w-100">
        </div>

    </form>

@endsection
    