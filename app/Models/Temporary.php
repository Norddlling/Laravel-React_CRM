<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Temporary extends Model
{
    protected $table = "temporary";
    //
    public function products() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function codes() :BelongsTo
    {
        return $this->belongsTo(Code::class);
    }
    public function carriages() :BelongsTo
    {
        return $this->belongsTo(Carriage::class);
    }
}
