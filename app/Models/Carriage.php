<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carriage extends Model
{  
    //
    public function wearhouses() :BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function receiving() :BelongsTo
    {
        return $this->belongsTo(Receiving::class);
    }
    public function transfering() :BelongsTo
    {
        return $this->belongsTo(Transfering::class);
    }
    public function temporary() :BelongsTo
    {
        return $this->belongsTo(Temporary::class);
    }
    public function received() :BelongsTo
    {
        return $this->belongsTo(Received::class);
    }
    public function transfered() :BelongsTo
    {
        return $this->belongsTo(Transfered::class);
    }
    public function displaced() :BelongsTo
    {
        return $this->belongsTo(Displaced::class);
    }
}
