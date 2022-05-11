<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\MerchFactory;

class Merch extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'price',
        'class',
        'subclass',
        'size',   
    ];

    protected static function newFactory(): MerchFactory
    {
        return new MerchFactory();
    }

}