<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sending extends Model
{
    //
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function sendingstatuses() :BelongsTo
    {
        return $this->belongsTo(Sendingstatus::class);
    }
    public function sended() :BelongsTo
    {
        return $this->belongsTo(Sended::class);
    }
    public function reserved() :BelongsTo
    {
        return $this->belongsTo(Reserved::class);
    }
}
