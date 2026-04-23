<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carriage extends Model
{  
    //
    public function wearhouses() :BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
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
}
