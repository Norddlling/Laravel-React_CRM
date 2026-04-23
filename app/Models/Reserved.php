<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserved extends Model
{   
    protected $table = "reserved";

    public function sendingnumbers() :BelongsTo
    {
        return $this->belongsTo(Sendingnumber::class);
    }
    public function products() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function codes() :BelongsTo
    {
        return $this->belongsTo(Code::class);
    }

    public $timestamps = false;
}
