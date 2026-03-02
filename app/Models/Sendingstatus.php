<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sendingstatus extends Model
{
    //
    public function sendings() :BelongsTo
    {
        return $this->belongsTo(Sending::class);
    }
}
