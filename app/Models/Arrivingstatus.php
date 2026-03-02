<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Arrivingstatus extends Model
{
    //
    public function arrivings() :HasOne
    {
        return $this->hasOne(Arriving::class);
    }
}
