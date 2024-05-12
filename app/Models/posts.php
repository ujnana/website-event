<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class posts extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
