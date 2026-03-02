<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arrived extends Model
{
    //
    public function arrivings() :HasMany
    {
        return $this->hasMany(Arriving::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function users() :HasMany
    {
        return $this->hasMany(User::class);
    }
}
