<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    protected $fillable = [
        'name',
        'source',
    ];

    public function downloads(): HasMany
    {
        return $this->hasMany(Download::class);
    }

    protected function shortName(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                if ($attributes['source'] === 'packagist') {
                    return preg_replace('#.*?/#', '', $attributes['name']);
                }

                return $attributes['name'];
            },
        );
    }
}
