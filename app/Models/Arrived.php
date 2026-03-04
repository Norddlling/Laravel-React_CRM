<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arrived extends Model
{
    //
    public function arrivingnumbers() :HasMany
    {
        return $this->hasMany(Arrivingnumber::class);
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
