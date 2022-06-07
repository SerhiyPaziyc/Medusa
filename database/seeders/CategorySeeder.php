<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name' => 'IPHONE',
                'slug' => 'iphones',
                'category_id' => 1,
            ],
            [
                'name' => 'IPAD',
                'slug' => 'ipad',
                'category_id' => 2,
            ],
            [
                'name' => 'WATCH',
                'slug' => 'watch',
                'category_id' => 3,
            ],
            [
                'name' => 'ACCESSORY',
                'slug' => 'accessory',
                'category_id' => 4,
            ],
            [
                'name' => 'Б/У IPHONE',
                'slug' => 'byiphones',
                'category_id' => 5,
            ],
        ];

        foreach ($data as $item) {
            Category::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
