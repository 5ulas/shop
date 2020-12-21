<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'rating',
        'comment',
        'client_id',
        'product_id'
    ];
    function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
