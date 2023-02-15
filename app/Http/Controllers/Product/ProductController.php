<?php

declare(strict_types=1);

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\SimpleResponseResource;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService
    ) {
    }

    /**
     * @return SimpleResponseResource
     */
    public function index()
    {
        $products = $this->productService->getAll();

        return $this->successfulResponse($products);
    }
}
