<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arriving extends Model
{
    //
    public function arrivingnumbers() :BelongsTo
    {
        return $this->belongsTo(Arrivingnumber::class);
    }
    public function products() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function codes() :BelongsTo
    {
        return $this->belongsTo(Code::class);
    }
}
