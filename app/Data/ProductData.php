<?php

declare(strict_types=1);

namespace App\Data;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    /**
     * @param string $name
     * @param string $image
     * @param string $sellPrice
     * @param string $buyPrice
     * @param string $stock
     * @param string $visits
     */
    public function __construct(
        public string $name,
        public string $image,
        public string $sellPrice,
        public string $buyPrice,
        public string $stock,
        public string $visits,
    ) {
    }
}
