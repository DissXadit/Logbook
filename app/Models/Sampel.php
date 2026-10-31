<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sampel extends Model
{
    protected $guarded = [];

    public function produks(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}