<?php

declare(strict_types=1);

namespace App\Services;

use App\Contract\ProductServiceInterface;
use App\Data\ProductData;
use App\Http\Requests\ProductRequest;
use App\Models\Product\Product;
use App\Repositories\ProductRepository;

class ProductService implements ProductServiceInterface
{
    private ProductRepository $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function makeDTO(): ProductData
    {
        return new ProductData(
            request('product_name'),
            request('product_sku'),
        );
    }

    /**
     * @return ProductRepository
     */
    public function repository(): ProductRepository
    {
        return $this->productRepository;
    }

    public function create(): Product
    {
        // TODO: Implement
    }
}
