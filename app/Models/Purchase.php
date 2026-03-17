<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Item;
use App\Models\Offer;

class Purchase extends Model
{
    protected $fillable = ['buyer_id', 'seller_id', 'item_id', 'price'];

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class);
    }

    public function buyer(): BelongsTo {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller(): BelongsTo {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
