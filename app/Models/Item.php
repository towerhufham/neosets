<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected function casts(): Array {
        return ['tags' => 'array'];
    }
}
