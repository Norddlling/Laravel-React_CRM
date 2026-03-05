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
    public function shipmentprocessed() :BelongsTo
    {
        return $this->belongsTo(Shipmentprocessed::class);
    }
    public function shipped() :BelongsTo
    {
        return $this->belongsTo(Shipped::class);
    }
}
