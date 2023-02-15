<?php

declare(strict_types=1);

namespace App\Models\Product;

use App\Models\BaseModel;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends BaseModel
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'sell_price',
        'buy_price',
        'stock',
        'visits'
    ];

    /**
     * @return ProductFactory|Factory
     */
    protected static function newFactory(): ProductFactory|Factory
    {
        return ProductFactory::new();
    }
}
