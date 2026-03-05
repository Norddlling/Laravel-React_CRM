<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Delivered extends Model
{
    //
    public function deliverynumbers() :HasMany
    {
        return $this->hasMany(Deliverynumber::class);
    }
    public function arrivingnumbers() :HasMany
    {
        return $this->hasMany(Arrivingnumber::class);
    }
    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function users() :HasMany
    {
        return $this->hasMany(User::class);
    }
}
