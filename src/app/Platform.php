<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function games() {
        return $this->hasMany(Game::class);
    }
}
