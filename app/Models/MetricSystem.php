<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MetricSystem extends Model
{
    use HasFactory;

    public function value(): BelongsTo
    {
        return $this->belongsTo(TableValue::class);
    }
}
