<?php

use Illuminate\Database\Seeder;

class GamePlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataFilename = dirname(__FILE__) . '/data/games.yml';
        $platforms = yaml_parse_file($dataFilename);
        foreach ($platforms as $platformName => $platformGameData) {
            $platform = App\Platform::firstOrCreate(array('name' => $platformName));
            foreach ($platformGameData as $gameData) {
                $game = App\Game::firstOrCreate($gameData);
                $platformIds = $game->platforms()->pluck('platform_id')->toArray();
                array_push($platformIds, $platform->id);
                $game->platforms()->sync($platformIds);
            }
        }
    }

}
