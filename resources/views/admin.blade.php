@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="mt-5">Admin</h1>

    <ul class="list-group">
        <li class="list-group-item">{{$user->id}}</li>
        <li class="list-group-item">{{$user->name}}</li>
        <li class="list-group-item">{{$user->email}}</li>
        <li class="list-group-item">{{$user->password}}</li>
      </ul>

</div>

@endsection