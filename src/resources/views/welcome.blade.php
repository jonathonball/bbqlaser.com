<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bbqlaser.com</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

    <style>
      .logo {
        max-height: 50px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-8 py-3">
          <img class="mx-auto d-block" src="{{ asset('images/carlton.gif') }}" width="242px" title="Alfonso Ribeiro's projection of joy depicted here; warms my heart."/>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-1 p-2">
          <a href="https://www.instagram.com/jonathonball/"><img class="logo" src="{{ asset('images/glyph-logo_May2016.png') }}"/></a>
        </div>
        <div class="col-xs-1 p-2">
          <a href="https://github.com/jonathonball"><img class="logo" src="{{ asset('images/GitHub-Mark-120px-plus.png') }}"/></a>
        </div>
        <div class="col-xs-1 p-2">
          <a href="https://www.facebook.com/vb.jon.ball"><img class="logo" src="{{ asset('images/f_logo_RGB-Black_72.png') }}"/></a>
        </div>
        <div class="col-xs-1 p-2">
          <a href="https://cornerofattention.com"><img class="logo" src="{{ asset('images/Tumblr_Logos_2018.03.06_tIconBlack.png') }}"/></a>
        </div>
        <div class="col-xs-1 p-2">
          <a href="https://jonathonball.com"><img class="logo" src="{{ asset('images/jball-port.jpg') }}"/></a>
        </div>
      </div>
    </div>
  </body>
</html>
