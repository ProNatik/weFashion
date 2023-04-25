<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Quantsize extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}