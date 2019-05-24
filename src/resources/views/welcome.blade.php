<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
      html, body {
          background-color: #fff;
          font-family: 'Permanent Marker', cursive;
          font-size: 48px;
          height: 100vh;
          margin: 0;
      }

      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
          padding-right: 50px;
      }

      .content {
          text-align: center;
      }

      .links > a {
          color: #000;
          padding: 20px;
          text-decoration: none;
      }

      .logo {
          color: #636b6f;
          height: 64px;
          width: 64px;
      }

      .m-b-md {
          margin-bottom: 30px;
      }

      .naked-list {
          list-style: none;
      }

      .horizontal-list li {
          display: inline;
      }
    </style>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      <div class="top-right links">
      </div>

      <div class="content">
        <div class="m-b-md">
          <img src="{{ asset('images/carlton.gif') }}" title="I love this gif.  It's a lovely embodiment of a beautiful man expressing joy "/>
        </div>

        <div class="links">
          <a href="#">New Content Coming Soon</a>
          <ul class="naked-list horizontal-list">
            <li>
              <a href="https://www.instagram.com/jonathonball/"><img class="logo" src="{{ asset('images/glyph-logo_May2016.png') }}"/></a>
            </li>
            <li>
              <a href="https://github.com/jonathonball"><img class="logo" src="{{ asset('images/GitHub-Mark-120px-plus.png') }}"/></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
