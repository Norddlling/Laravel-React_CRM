<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Code extends Model
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
}

