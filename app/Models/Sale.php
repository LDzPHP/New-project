<?php

namespace App\Models;

use Database\Factories\SaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'price',
        'print_id',
        'customer_id',
        'sum',   
    ];

    protected static function newFactory(): SaleFactory
    {
        return new SaleFactory();
    }

}
