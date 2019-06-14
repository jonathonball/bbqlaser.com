@extends('layouts.app')

@section('page-title', 'Welcome')

@section('content')
<div class="container-fluid">
  <div class="row p-3">
    <img class="mx-auto d-block img-fluid" src="{{ asset('images/carlton.gif') }}" width="242px" title="Alfonso Ribeiro's projection of joy depicted here; warms my heart."/>
  </div>
  <div class="row justify-content-center">
    <div class="col-xs-1 p-2 text-center">
      <a href="https://www.instagram.com/jonathonball/"><img class="logo" src="{{ asset('images/glyph-logo_May2016.png') }}"/></a>
    </div>
    <div class="col-xs-1 p-2 text-center">
      <a href="https://github.com/jonathonball"><img class="logo" src="{{ asset('images/GitHub-Mark-120px-plus.png') }}"/></a>
    </div>
    <div class="col-xs-1 p-2 text-center">
      <a href="https://www.facebook.com/vb.jon.ball"><img class="logo" src="{{ asset('images/f_logo_RGB-Black_72.png') }}"/></a>
    </div>
    <div class="col-xs-1 p-2 text-center">
      <a href="https://cornerofattention.com"><img class="logo" src="{{ asset('images/Tumblr_Logos_2018.03.06_tIconBlack.png') }}"/></a>
    </div>
    <div class="col-xs-1 p-2 text-center">
      <a href="https://jonathonball.com"><img class="logo" src="{{ asset('images/jball-port.jpg') }}"/></a>
    </div>
  </div>
</div>
@endsection
