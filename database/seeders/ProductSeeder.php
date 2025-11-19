<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
public function run(): void
{
Product::create([ 'name' => 'T-shirt Basic', 'description' => 'Kaos katun nyaman', 'price' => 79900.00, 'stock' => 50 ]);
Product::create([ 'name' => 'Sneakers Classic', 'description' => 'Sepatu casual untuk sehari-hari', 'price' => 399000.00, 'stock' => 20 ]);
Product::create([ 'name' => 'Hoodie Summer', 'description' => 'Hoodie ringan', 'price' => 129000.00, 'stock' => 30 ]);
Product::create([ 'name' => 'Topi Trucker', 'description' => 'Topi gaya streetwear', 'price' => 59000.00, 'stock' => 100 ]);
Product::create([ 'name' => 'Jakarta Mug', 'description' => 'Mug keramik 350ml', 'price' => 45000.00, 'stock' => 75 ]);
}
}