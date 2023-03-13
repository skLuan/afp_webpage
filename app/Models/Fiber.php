<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Fiber extends Model
{
    use HasFactory;

    public function table(): HasOne
    {
        return $this->hasOne(FiberTable::class);
    }
    public function advantages(): BelongsToMany
    {
        return $this->belongsToMany(AdvantagesFibers::class);
    }
}
