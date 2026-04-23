<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defect extends Model
{
    //
    public function products() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function codes() :BelongsTo
    {
        return $this->belongsTo(Code::class);
    }
    public function places() :BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
