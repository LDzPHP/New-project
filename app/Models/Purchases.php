<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PurchasesFactory;

class Purchases extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'class',
        'price',
        'date',   
    ];

    protected static function newFactory(): PurchasesFactory
    {
        return new PurchasesFactory();
    }

}