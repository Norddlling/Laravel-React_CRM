<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sendingstatus extends Model
{
    //
    public function sendings() :HasOne
    {
        return $this->hasOne(Sending::class);
    }
}
