<?php

declare(strict_types=1);

namespace App\Providers;

use App\Contract\ProductServiceInterface;
use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;
use function Psy\bin;

class HimenProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
    }
}
