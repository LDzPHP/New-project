<?php

namespace App\Models;

use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

        /**
 * The attributes that are mass assignable.
 *
 * @var array<int, string>
 */

protected $fillable = [
    'name',
    'email',
    'customer_id',   
];

protected static function newFactory(): CustomerFactory
{
    return new CustomerFactory();
}

}
