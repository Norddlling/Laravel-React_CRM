<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Sendingstatus extends Model
{
    //
    public function sendingnumbers() :HasOne
    {
        return $this->hasOne(Sendingnumber::class);
    }
}
