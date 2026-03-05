<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipped extends Model
{
    //
    public function shipmentnumbers() :HasMany
    {
        return $this->hasMany(Shipmentnumber::class);
    }
    public function sendingnumbers() :HasMany
    {
        return $this->hasMany(Sendingnumber::class);
    }
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
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
