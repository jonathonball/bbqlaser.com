<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'min_players',
        'max_players'
    ];

    public function platforms() {
        return $this->belongsToMany(Platform::class);
    }
}
