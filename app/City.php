<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function markets()
    {
        return $this->hasMany(Farmer::class, 'city', 'name');
    }
}
