<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Displaced extends Model
{
    protected $table = "displaced";
    //
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function codes() :HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function carriages() :HasMany
    {
        return $this->hasMany(Carriage::class);
    }
    public function users() :HasMany
    {
        return $this->hasMany(User::class);
    }

    public $timestamps = false;
}
