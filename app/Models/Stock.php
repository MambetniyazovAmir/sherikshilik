<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'import_id',
        'investor_id',
        'procent',
    ];

    public function import()
    {
        return $this->belongsTo(Import::class);
    }

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }
}
