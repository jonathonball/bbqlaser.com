<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public function platform() {
        return $this->belongsToMany(Platform::class);
    }

}
