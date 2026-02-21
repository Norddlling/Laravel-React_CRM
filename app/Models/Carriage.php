<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carriage extends Model
{  
    public $timestamps = false;
    public function wearhouses() :BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function receiving() :BelongsTo
    {
        return $this->belongsTo(Receiving::class);
    }
}
