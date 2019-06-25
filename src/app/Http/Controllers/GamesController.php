<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Services\SteamApi;

class GamesController extends Controller
{

    public function index() {
      $games = Game::all();
      return view('games', [
          'games' => $games,
      ]);
    }

}
