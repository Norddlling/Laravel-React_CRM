<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Delivery extends Model
{
    //
    public function arrivings() :HasMany
    {
        return $this->hasMany(Arriving::class);
    }
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
}
