<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'This is a laptop'
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'This is a smartphone'
        ]);
    }
}

