@extends('layouts.app')

@section('page-title', 'Games')

@section('content')
<div class="container-fluid bg-dark card-columns p-4">

@foreach($games as $game)
        <div class="card">
          <div class="card-header"><strong class="naked-h3">{{ $game->name }}</strong></h5></div>
          <div class="card-body">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Content</strong></li>
            <li class="list-group-item">Goes here.</li>
          </ul>
        </div>
@endforeach

</div>
@endsection
