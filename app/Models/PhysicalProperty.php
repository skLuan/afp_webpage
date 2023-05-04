<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class PhysicalProperty extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['name'];

    public function values(): HasMany
    {
        return $this->hasMany(TableValue::class, 'name_id', 'id');
    }
}
