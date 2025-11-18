<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Variant;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of products with their variants
        $products = [
            [
                'name' => 'MacBook Air M2',
                'brand' => 'Apple',
                'model' => 'M2',
                'description' => 'Light and powerful Apple laptop',
                'category' => 'laptop',
                'variants' => [
                    ['processor' => 'Apple M2', 'ram' => '8GB', 'storage' => '256GB SSD', 'display' => '13.3" Retina', 'graphics' => 'Apple GPU', 'price' => 1200, 'stock' => 10],
                    ['processor' => 'Apple M2', 'ram' => '16GB', 'storage' => '512GB SSD', 'display' => '13.3" Retina', 'graphics' => 'Apple GPU', 'price' => 1500, 'stock' => 5],
                ],
            ],
            [
                'name' => 'Dell XPS 13',
                'brand' => 'Dell',
                'model' => 'XPS13',
                'description' => 'Compact ultrabook with great display',
                'category' => 'laptop',
                'variants' => [
                    ['processor' => 'Intel i5-1230U', 'ram' => '8GB', 'storage' => '256GB SSD', 'display' => '13.3" FHD', 'graphics' => 'Intel Iris Xe', 'price' => 1000, 'stock' => 8],
                    ['processor' => 'Intel i7-1250U', 'ram' => '16GB', 'storage' => '512GB SSD', 'display' => '13.3" FHD', 'graphics' => 'Intel Iris Xe', 'price' => 1300, 'stock' => 4],
                ],
            ],
            [
                'name' => 'HP Spectre x360',
                'brand' => 'HP',
                'model' => 'Spectre',
                'description' => 'Convertible 2-in-1 laptop',
                'category' => 'laptop',
                'variants' => [
                    ['processor' => 'Intel i5-1135G7', 'ram' => '8GB', 'storage' => '256GB SSD', 'display' => '13.3" FHD', 'graphics' => 'Intel Iris Xe', 'price' => 950, 'stock' => 12],
                    ['processor' => 'Intel i7-1165G7', 'ram' => '16GB', 'storage' => '512GB SSD', 'display' => '13.3" FHD', 'graphics' => 'Intel Iris Xe', 'price' => 1200, 'stock' => 6],
                ],
            ],
            [
                'name' => 'Lenovo ThinkPad X1',
                'brand' => 'Lenovo',
                'model' => 'X1 Carbon',
                'description' => 'Business laptop, lightweight',
                'category' => 'laptop',
                'variants' => [
                    ['processor' => 'Intel i5-1135G7', 'ram' => '8GB', 'storage' => '256GB SSD', 'display' => '14" FHD', 'graphics' => 'Intel Iris Xe', 'price' => 1050, 'stock' => 7],
                    ['processor' => 'Intel i7-1165G7', 'ram' => '16GB', 'storage' => '512GB SSD', 'display' => '14" FHD', 'graphics' => 'Intel Iris Xe', 'price' => 1300, 'stock' => 3],
                ],
            ],
            [
                'name' => 'ASUS ZenBook 14',
                'brand' => 'ASUS',
                'model' => 'UX425',
                'description' => 'Stylish ultrabook for professionals',
                'category' => 'laptop',
                'variants' => [
                    ['processor' => 'AMD Ryzen 5 5500U', 'ram' => '8GB', 'storage' => '512GB SSD', 'display' => '14" FHD', 'graphics' => 'AMD Vega', 'price' => 950, 'stock' => 10],
                    ['processor' => 'AMD Ryzen 7 5700U', 'ram' => '16GB', 'storage' => '1TB SSD', 'display' => '14" FHD', 'graphics' => 'AMD Vega', 'price' => 1200, 'stock' => 5],
                ],
            ],
        ];

        foreach ($products as $productData) {
            // Create product with seller_id = 2
            $product = Product::create([
                'seller_id' => 2,
                'name' => $productData['name'],
                'brand' => $productData['brand'],
                'model' => $productData['model'],
                'description' => $productData['description'],
                'category' => $productData['category'],
                'is_blocked' => 0,
            ]);

            // Create variants
            foreach ($productData['variants'] as $variantData) {
                $product->variants()->create($variantData);
            }
        }
    }
}
