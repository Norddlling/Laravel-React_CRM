<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipmentnumber extends Model
{
    //
    public function shipments() :HasMany
    {
        return $this->hasMany(Shipment::class);
    }
    public function shipmentprocessed() :HasMany
    {
        return $this->hasMany(Shipmentprocessed::class);
    }
    public function shipped() :HasMany
    {
        return $this->hasMany(Shipped::class);
    }
}
