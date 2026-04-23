<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deliverynumber extends Model
{
    //
    public function deliveries() :HasMany
    {
        return $this->hasMany(Delivery::class);
    }
    public function delivered() :HasMany
    {
        return $this->hasMany(Delivered::class);
    }
}
