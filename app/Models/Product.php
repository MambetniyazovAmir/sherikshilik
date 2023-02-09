<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'name',
        'artikul',
        'quantity',
        'buy_price',
        'sell_price',
        'import_id'
    ];

    public function import()
    {
        return $this->belongsTo(Import::class);
    }
}
