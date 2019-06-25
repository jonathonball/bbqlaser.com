<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameMode extends Model
{

    public $timestamps = false;

    protected $fillable = [];

    public function games() {
        return $this->hasMany(Game::class);
    }

}
