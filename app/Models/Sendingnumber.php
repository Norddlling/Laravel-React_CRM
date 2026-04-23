<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sendingnumber extends Model
{
    //
    public function sendings() :HasMany
    {
        return $this->hasMany(Sending::class);
    }
    public function sendingstatuses() :HasOne
    {
        return $this->hasOne(Sendingstatus::class);
    }
    public function sended() :HasMany
    {
        return $this->hasMany(Sended::class);
    }
    public function reserved() :HasMany
    {
        return $this->hasMany(Reserved::class);
    }
    public function shipments() :HasMany
    {
        return $this->hasMany(Shipment::class);
    }
    public function shipped() :HasMany
    {
        return $this->hasMany(Shipped::class);
    }
}
