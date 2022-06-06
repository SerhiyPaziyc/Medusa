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
                'name' => 'Б/У IPHONE',
                'slug' => 'iphones',
            ],
            [
                'name' => 'cat_2',
                'slug' => 'cat_2',
            ],
        ];

        foreach ($data as $item) {
            Category::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
