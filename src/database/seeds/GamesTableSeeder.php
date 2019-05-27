<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gamesFile = dirname(__FILE__) . '/data/games.yml';
        $gamesToImport = yaml_parse_file($gamesFile)['PC'];
        DB::table('games')->insert($gamesToImport);
        $pcPlatform = App\Platform::where('name', 'PC')->first();
        $gameIds = DB::table('games')->pluck('id');
        $pcPlatform->games()->sync($gameIds);
    }

}
