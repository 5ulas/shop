<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'warranty',
        'description',
        'specification',
        'stored_since',
        'price',
        'special_storing_terms',
        'volume',
        'weight',
        'order_id'
    ];
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }
}
