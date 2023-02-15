<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class UserPermissionSeeder extends Seeder
{
    public function run()
    {
        //create all permissions
        Permission::create(['name' => 'view_name']);
        Permission::create(['name' => 'view_image']);
        Permission::create(['name' => 'view_sell_price']);
        Permission::create(['name' => 'view_buy_price']);
        Permission::create(['name' => 'view_stock']);
        Permission::create(['name' => 'all permissions']);

        // create User1
        $user1 = User::create([
            'name'              => fake()->name(),
            'email'             => 'user1@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'),
            'remember_token'    => Str::random(10),
        ]);

        // Add permissions to user1
        $user1->givePermissionTo([
            'view_name',
            'view_image',
            'view_sell_price'
        ]);

        // create User2
        $user2 = User::create([
            'name'              => fake()->name(),
            'email'             => 'user2@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'), // password
            'remember_token'    => Str::random(10),
        ]);

        // add permissions to user2
        $user2->givePermissionTo([
            'view_name',
            'view_buy_price',
            'view_stock'
        ]);

        // create User3
        $user3 = User::create([
            'name'              => fake()->name(),
            'email'             => 'user3@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'), // password
            'remember_token'    => Str::random(10),
        ]);

        // add permissions to user3
        $user3->givePermissionTo([
            'all permissions'
        ]);
    }
}
