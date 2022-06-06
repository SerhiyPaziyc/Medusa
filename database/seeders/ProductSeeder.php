<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'iPhone 13 PRO MAX',
                'slug' => 'iphone_13_pro_max',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 13 PRO',
                'slug' => 'iphone_13_pro',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 13',
                'slug' => 'iphone_13',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 12 PRO MAX',
                'slug' => 'iphone_12_pro_max',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 12 PRO',
                'slug' => 'iphone_12_pro',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 12',
                'slug' => 'iphone_12',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 1,
            ],
        ];

        foreach ($data as $item) {
            Product::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
