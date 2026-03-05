<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipmentnumber extends Model
{
    //
    public function shipments() :BelongsTo
    {
        return $this->belongsTo(Shipment::class);
    }
}
