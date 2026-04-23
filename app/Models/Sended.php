<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sended extends Model
{
    protected $table = "sended";
    //
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
    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;
}
