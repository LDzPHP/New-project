<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'author',
        'body',
        'customer_id',
    ];

    public function customer(): BelongsTo
    {
        return $this->BelongsTo(Customer::class);
    }
}
