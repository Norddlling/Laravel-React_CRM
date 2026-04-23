<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    //
    public function deliverynumbers() :BelongsTo
    {
        return $this->belongsTo(Deliverynumber::class);
    }
    public function arrivingnumbers() :BelongsTo
    {
        return $this->belongsTo(Arrivingnumber::class);
    }
    public function products() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
