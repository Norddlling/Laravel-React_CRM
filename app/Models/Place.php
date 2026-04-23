<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
    //
    public function wearhouses() :BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function physical() :HasMany
    {
        return $this->hasMany(Physical::class);
    }
    public function defects() :HasMany
    {
        return $this->hasMany(Defect::class);
    }
    public function placed() :HasMany
    {
        return $this->hasMany(Placed::class);
    }
    public function rejected() :HasMany
    {
        return $this->hasMany(Rejected::class);
    }
}