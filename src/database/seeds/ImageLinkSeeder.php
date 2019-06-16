<?php

use Illuminate\Database\Seeder;

class ImageLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $icons = [
        [
          'link' => 'https://www.instagram.com/jonathonball/',
          'image' => 'glyph-logo_May2016.png'
        ],
        [
          'link' => 'https://github.com/jonathonball',
          'image' => 'GitHub-Mark-120px-plus.png'
        ],
        [
          'link' => 'https://www.facebook.com/vb.jon.ball',
          'image' => 'f_logo_RGB-Black_72.png'
        ],
        [
          'link' => 'https://cornerofattention.com',
          'image' => 'Tumblr_Logos_2018.03.06_tIconBlack.png'
        ],
        [
          'link' => 'https://jonathonball.com',
          'image' => 'jball-port.jpg'
        ],
      ];
      foreach ($icons as $iconData) {
        $icon = new App\ImageLink($iconData);
        $icon->save();
      }
    }
}
