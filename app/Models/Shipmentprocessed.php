<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shipmentprocessed extends Model
{
    //
    public function shipmentnumbers() :HasOne
    {
        return $this->hasOne(Shipmentnumber::class);
    }
}
