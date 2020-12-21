<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'creation_date',
        'period',
        'status',
        'done',
        'delivery_address',
        'discount',
        'price',
        'client_id',
        'employee_id',
        'fees_id'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
