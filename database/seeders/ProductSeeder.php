<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory()
            ->count(100)
            ->create();
    }
}
