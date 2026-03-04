<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arriving extends Model
{
    //
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function arrivingstatuses() :BelongsTo
    {
        return $this->belongsTo(Arrivingstatus::class);
    }
    public function arrived() :BelongsTo
    {
        return $this->belongsTo(Arrived::class);
    }
    public function deliveries() :BelongsTo
    {
        return $this->belongsTo(Delivery::class);
    }
    public function delivered() :BelongsTo
    {
        return $this->belongsTo(Delivered::class);
    }
}
