<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const PRODUCT_TYPE_B2B = 'b2b';
    const PRODUCT_TYPE_B2C = 'b2c';

    public static $types = [
        self::PRODUCT_TYPE_B2B,
        self::PRODUCT_TYPE_B2C
    ];
}
