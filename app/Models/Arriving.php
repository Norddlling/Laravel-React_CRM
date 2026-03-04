<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Arriving extends Model
{
    //
    public function arrivingnumbers() :HasOne
    {
        return $this->hasOne(Arrivingnumber::class);
    }
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
}
