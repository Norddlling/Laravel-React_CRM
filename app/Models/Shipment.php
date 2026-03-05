<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipment extends Model
{
    //
    public function shipmentnumbers() :HasMany
    {
        return $this->hasMany(Shipmentnumber::class);
    }
    public function sendings() :HasMany
    {
        return $this->hasMany(Sending::class);
    }
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
}
