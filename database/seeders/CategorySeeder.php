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
            ],
            [
                'name' => 'IPAD',
                'slug' => 'ipad',
            ],
            [
                'name' => 'WATCH',
                'slug' => 'watch',
            ],
            [
                'name' => 'ACCESSORY',
                'slug' => 'accessory',
            ],
            [
                'name' => 'Б/У IPHONE',
                'slug' => 'byiphones',
            ],
        ];

        foreach ($data as $item) {
            Category::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
