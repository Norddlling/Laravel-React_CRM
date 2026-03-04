<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arrivingnumber extends Model
{
    //
    public function arrivings() :BelongsTo
    {
        return $this->belongsTo(Arriving::class);
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
