<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder{
    public function run(): void{
        $products =[
            [
                'img' => '/shoe.png',
                'brand' => 'Nike',
                'title' => 'Nike Air Jorden',
                'rating' => 4.5,
                'reviews' => 1280,
                'sellPrice' => 4999.00,
                'orders' => '3200',
                'mrp' => '9999',
                'discount' => 25,
                'category' => 'men',
            ],
            [
                'img' => '/shoe.png',
                'brand' => 'Adidas',
                'title' => 'Adidas Air Jorden',
                'rating' => 4.5,
                'reviews' => 1280,
                'sellPrice' => 4999.00,
                'orders' => '3200',
                'mrp' => '9999',
                'discount' => 30,
                'category' => 'women',
            ],
        ];

        foreach ($products as $product){
            Product::updateOrCreate(
                ['title' => $product['title']],
                $product
            );
        }
    }
}