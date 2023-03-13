<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PhysicalProperty extends Model
{
    use HasFactory;

    public function values(): HasMany
    {
        return $this->hasMany(TableValue::class, 'name_id', 'id');
    }
}
