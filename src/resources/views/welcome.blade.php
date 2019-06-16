@extends('layouts.app')

@section('page-title', 'Welcome')

@section('content')
<div class="container-fluid">
  <div class="row p-3">
    <img class="mx-auto d-block img-fluid" src="{{ asset('images/carlton.gif') }}" width="242px" title="Alfonso Ribeiro's projection of joy depicted here; warms my heart."/>
  </div>
  <div class="row justify-content-center">
  @foreach($icons as $icon)
    <div class="col-xs-1 p-2 text-center">
      <a href="{{ $icon->link }}">
        <img class="logo" src="{{ asset('images/' . $icon->image) }}"/>
      </a>
    </div>
  @endforeach
  </div>
</div>
@endsection
