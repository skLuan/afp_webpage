<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Fiber extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name', 'description'];

    public function table(): HasOne
    {
        return $this->hasOne(FiberTable::class);
    }
    public function advantages(): BelongsToMany
    {
        return $this->belongsToMany(AdvantagesFibers::class);
    }
}
