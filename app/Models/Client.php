<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'age',
        'iban',
        'address',
        'postal_code',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }
}
