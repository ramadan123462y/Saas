<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call(AdminSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(TempleteSeeder::class);
        $this->call(PlanSeeder::class);
        // $this->call(StoreSeeder::class);


        // Store::factory(5)->create();
        // Categorie::factory(10)->create();
        // Product::factory(10)->create();

        // $this->call(ProductSeeder::class);

        $this->call(PaymentMethodSeeder::class);
        $this->call(MufatoorahmethodsSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
