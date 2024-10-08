<?php

namespace App\Models;

use Eloquent;

class City extends Eloquent
{
    public function ministry()
    {
       // return $this->hasMany(Ministry::class);
    }
}
