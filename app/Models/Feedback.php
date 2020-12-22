<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating',
        'comment',
        'product_id',
        'user_id'
    ];
    function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
