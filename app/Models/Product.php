<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'warranty',
        'description',
        'specification',
        'stored_since',
        'price',
        'special_storing_terms',
        'volume',
        'weight'
    ];

    public $timestamps = false;
}
