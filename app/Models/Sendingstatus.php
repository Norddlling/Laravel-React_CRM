<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Sendingstatus extends Model
{
    //
    public function sendingnumbers() :BelongsTo
    {
        return $this->belongsTo(Sendingnumber::class);
    }
}
