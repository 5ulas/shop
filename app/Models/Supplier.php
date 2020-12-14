<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'company_code',
        'iban',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
