<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sendingnumber extends Model
{
    //
    public function sendingnumbers() :BelongsTo
    {
        return $this->belongsTo(Sendingnumber::class);
    }
    public function sendingstatuses() :BelongsTo
    {
        return $this->belongsTo(Sendingstatus::class);
    }
    public function sended() :BelongsTo
    {
        return $this->belongsTo(Sended::class);
    }
    public function reserved() :BelongsTo
    {
        return $this->belongsTo(Reserved::class);
    }
    public function shipments() :BelongsTo
    {
        return $this->belongsTo(Shipment::class);
    }
    public function shipped() :BelongsTo
    {
        return $this->belongsTo(Shipped::class);
    }
}
