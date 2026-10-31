<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    protected $guarded = [];

    public function sampels(): HasMany
    {
        return $this->hasMany(Sampel::class);
    }
}