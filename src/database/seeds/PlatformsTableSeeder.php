<?php

use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platformsToImport = array(
            array('name' => 'PC'),
            array('name' => 'Nintendo Switch')
        );
        DB::table('platforms')->insert($platformsToImport);
    }
}
