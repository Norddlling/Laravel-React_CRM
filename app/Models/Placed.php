<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Placed extends Model
{
    //
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function places() :HasMany
    {
        return $this->hasMany(Place::class);
    }
    public function users() :HasMany
    {
        return $this->hasMany(User::class);
    }
}
