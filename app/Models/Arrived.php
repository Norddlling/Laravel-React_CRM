<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arrived extends Model
{
    protected $table = "arrived";
    //
    public function arrivingnumbers() :HasMany
    {
        return $this->hasMany(Arrivingnumber::class);
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

    public $timestamps = false;
}
