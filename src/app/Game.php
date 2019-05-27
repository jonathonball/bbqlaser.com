<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public function platforms() {
        return $this->belongsToMany(Platform::class);
    }

}
