<?php

declare(strict_types=1);

namespace App\Services;

use App\Contract\ProductServiceInterface;
use App\Data\ProductData;
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
            request('name'),
            request('image'),
            request('sell_price'),
            request('buy_price'),
            request('stock'),
            request('visits'),
        );
    }

    /**
     * @return ProductRepository
     */
    public function repository(): ProductRepository
    {
        return $this->productRepository;
    }

    /**
     * @return mixed
     */
    public function getAll(): mixed
    {
        $user = auth()->user();
        $permissions = $user->getPermissionNames()->toArray();

        if (empty($permissions)) {
            return false;
        }

        if (in_array('all permissions', $permissions)) {
            return $this->repository()->all();
        }

        $select = array_map(fn($value) => substr($value, 5), $permissions);

        return $this->repository()->get($select);
    }
}
