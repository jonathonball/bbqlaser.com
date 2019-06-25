<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Services\SteamApi;

class GamesController extends Controller
{

    public function index(SteamApi $steam)
    {
        $games = Game::all();

        return view('games', [
            'games' => $games,
        ]);
    }

    public function updateSteamGames(SteamApi $steam)
    {
        $gameData = $steam->getOwnedGames();
        $gameCount = $results['response']['game_count'];
        $games = $results['response']['games'];
        // TODO add new games to database
        return view('api-result', [
            'count' => $gameCount,
        ]);
    }

}
