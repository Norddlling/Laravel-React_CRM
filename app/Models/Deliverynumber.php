<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deliverynumber extends Model
{
    //
    public function deliveries() :BelongsTo
    {
        return $this->belongsTo(Delivery::class);
    }
    public function delivered() :BelongsTo
    {
        return $this->belongsTo(Delivered::class);
    }
}
