<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Place extends Model
{
    //
    public function wearhouses() :BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function physical() :BelongsTo
    {
        return $this->belongsTo(Physical::class);
    }
    public function defects() :BelongsTo
    {
        return $this->belongsTo(Defect::class);
    }
    public function placed() :BelongsTo
    {
        return $this->belongsTo(Placed::class);
    }
    public function rejected() :BelongsTo
    {
        return $this->belongsTo(Rejected::class);
    }
}