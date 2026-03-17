<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Offer;
use App\Models\Purchase;

class Item extends Model
{
    protected function casts(): Array {
        return ['tags' => 'array'];
    }

    public function offers(): HasMany {
        return $this->hasMany(Offer::class);
    }

    public function purchases(): HasMany {
        return $this->hasMany(Purchase::class);
    }
}
