<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arrivingstatus extends Model
{
    //
    public function arrivingnumbers() :BelongsTo
    {
        return $this->belongsTo(Arrivingnumber::class);
    }
}
