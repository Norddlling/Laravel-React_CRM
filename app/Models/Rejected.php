<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rejected extends Model
{
    protected $table = "rejected";
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
    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;
}
