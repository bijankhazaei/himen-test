<?php

declare(strict_types=1);

namespace App\Data;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    /**
     * @param string $productName
     * @param string $productSKU
     */
    public function __construct(
        public string $productName,
        public string $productSKU
    )
    {
    }
}
