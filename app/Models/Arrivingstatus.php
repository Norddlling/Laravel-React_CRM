<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arrivingstatus extends Model
{
    //
    public function arrivings() :BelongsTo
    {
        return $this->belongsTo(Arriving::class);
    }
}
