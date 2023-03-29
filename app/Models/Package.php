<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
}
