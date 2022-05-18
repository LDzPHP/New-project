<?php

namespace App\Models;

use Database\Factories\PrFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pr extends Model
{
    use HasFactory;
    
        /**
 * The attributes that are mass assignable.
 *
 * @var array<int, string>
 */

protected $fillable = [
    'amount',
    'pr_price',
    'description',   
];

protected static function newFactory(): PrFactory
    {
        return new PrFactory();
    }
}
