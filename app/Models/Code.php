<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Code extends Model
{
    //
    public function physical() :HasMany
    {
        return $this->hasMany(Physical::class);
    }
    public function defects() :HasMany
    {
        return $this->hasMany(Defect::class);
    }
    public function receiving() :HasMany
    {
        return $this->hasMany(Receiving::class);
    }
    public function transfering() :HasMany
    {
        return $this->hasMany(Transfering::class);
    }
    public function temporary() :HasMany
    {
        return $this->hasMany(Temporary::class);
    }
    public function placed() :HasMany
    {
        return $this->hasMany(Placed::class);
    }
    public function rejected() :HasMany
    {
        return $this->hasMany(Rejected::class);
    }
    public function received() :HasMany
    {
        return $this->hasMany(Received::class);
    }
    public function transfered() :HasMany
    {
        return $this->hasMany(Transfered::class);
    }
    public function displaced() :HasMany
    {
        return $this->hasMany(Displaced::class);
    }
    public function arriving() :HasMany
    {
        return $this->hasMany(Arriving::class);
    }
    public function sending() :HasMany
    {
        return $this->hasMany(Sending::class);
    }
    public function arrived() :HasMany
    {
        return $this->hasMany(Arrived::class);
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

