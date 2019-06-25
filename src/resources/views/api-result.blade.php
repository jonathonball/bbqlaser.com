@extends('layouts.app')

@section('page-title', 'Games')

@section('content')
<div class="container-fluid bg-dark card-columns p-4">

  <div class="card text-white bg-success">
    <div class="card-header"><strong class="naked-h3">Ok</strong></h5></div>
    <div class="card-body">
      Got {{ $count }} games from API.
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><strong>Content</strong></li>
      <li class="list-group-item">Goes here.</li>
    </ul>
  </div>

</div>
@endsection
