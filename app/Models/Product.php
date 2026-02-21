<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    public function physical() :BelongsTo
    {
        return $this->belongsTo(Physical::class);
    }
    public function defects() :BelongsTo
    {
        return $this->belongsTo(Defect::class);
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
    public function placed() :BelongsTo
    {
        return $this->belongsTo(Placed::class);
    }
    public function rejected() :BelongsTo
    {
        return $this->belongsTo(Rejected::class);
    }
}
