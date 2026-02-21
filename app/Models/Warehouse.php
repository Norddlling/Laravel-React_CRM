<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends Model
{
    public $timestamps = false;

    public function places() :HasMany
    {
        return $this->hasMany(Place::class);
    }

    public function carriages() :HasMany
    {
        return $this->hasMany(Carriage::class);
    }
}
