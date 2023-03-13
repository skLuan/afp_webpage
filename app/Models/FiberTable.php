<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FiberTable extends Model
{
    use HasFactory;

    public function fiber(): BelongsTo
    {
        return $this->belongsTo(Fiber::class);
    }

    public function values(): BelongsToMany
    {
        return $this->belongsToMany(TableValue::class, 'fibers_tables_values', 'fiber_table_id', 'value_id', 'id');
    }
}
