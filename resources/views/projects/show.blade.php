@extends('layouts.projects')

@section("title", $project->name)

@section('content')
    
    <div class="d-flex justify-content-end gap-3">
        <a href="{{route("projects.edit",$project)}}" class="btn btn-warning">Modifica</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Elimina Progetto
        </button>
        
    </div>

    <h2 class="my-3">
        {{$project->client?? "Nessun Cliente"}}
    </h2>


    <small>{{$project->worked_on_date}}</small>

    <p>{{$project->content}}</p>

    <a href="{{route("projects.index")}}">Tutti i progetti</a>





    <div id="deleteModal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Conferma Eliminazione</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Sei sicuro di voler eliminare il progetto?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route("projects.destroy",$project)}}" method="POST">
                    @csrf
                    @method("DELETE")
    
                    <input type="submit" value="Elimina" class="btn btn-danger">
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection