<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class TableValue extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['value'];


    public function tables(): BelongsToMany
    {
        return $this->belongsToMany(FiberTable::class, 'fibers_tables_values', 'fiber_table_id', 'value_id');
    }

    public function metricSystem(): HasOne
    {
        return $this->hasOne(MetricSystem::class, 'id','metric_system_id');
    }

    public function physicalName(): BelongsTo
    {
        return $this->belongsTo(PhysicalProperty::class,'id');
    }
}
