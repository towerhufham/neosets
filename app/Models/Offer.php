<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Item;
use App\Models\User;

class Offer extends Model
{
    protected $fillable = ['user_id', 'item_id', 'price'];

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
