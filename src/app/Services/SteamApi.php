<?php

// https://developer.valvesoftware.com/wiki/Steam_Web_API#GetOwnedGames_.28v0001.29

namespace App\Services;

use GuzzleHttp\Client;

class SteamApi {

    public function __construct()
    {
        //
    }

    private function getJsonResponse($response)
    {
        if ($response->getStatusCode() == 200) {
            $responseData = $response->getBody()->getContents();
            $jsonData = json_decode($responseData, true);
            return $jsonData;
        }
        abort($response->getStatusCode(), $response->getReasonPhrase());
    }

    /**
     * Implements:
     * http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=XXXXXXXXXXXXXXXXX&steamid=76561197960434622&format=json
     */
    public function getOwnedGames()
    {
        $client = new Client();
        $url = 'http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001';
        $response = $client->request('GET', $url, [
            'query' => [
                'key' => config('services.steam.key'),
                'steamid' => config('services.steam.user'),
                'include_appinfo' => true,
                'format' => 'json',
            ]
        ]);
        return $this->getJsonResponse($response);
    }

}