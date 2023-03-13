<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdvantagesFiber extends Model
{
    use HasFactory;

    public function fibers(): BelongsToMany
    {
        return $this->belongsToMany(Fiber::class);
    }

}
