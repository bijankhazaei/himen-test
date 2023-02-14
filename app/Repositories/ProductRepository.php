<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Eloquent\Repository;
use App\Models\Product\Product;

class ProductRepository extends Repository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return Product::class;
    }
}
