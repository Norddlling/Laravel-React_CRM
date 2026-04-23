<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Arrivingnumber extends Model
{
    //
    public function arrivings() :HasMany
    {
        return $this->hasMany(Arriving::class);
    }
    public function arrivingstatuses() :HasOne
    {
        return $this->hasOne(Arrivingstatus::class);
    }
    public function arrived() :HasMany
    {
        return $this->hasMany(Arrived::class);
    }
    public function deliveries() :HasMany
    {
        return $this->hasMany(Delivery::class);
    }
    public function delivered() :HasMany
    {
        return $this->hasMany(Delivered::class);
    }
}
