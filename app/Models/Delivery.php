<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Delivery extends Model
{
    //
    public function arrivingnumbers() :HasMany
    {
        return $this->hasMany(Arrivingnumber::class);
    }
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
}
