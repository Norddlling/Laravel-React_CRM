<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sended extends Model
{
    //
    public function sendingnumbers() :HasMany
    {
        return $this->hasMany(Sendingnumber::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function users() :HasMany
    {
        return $this->hasMany(User::class);
    }
}
