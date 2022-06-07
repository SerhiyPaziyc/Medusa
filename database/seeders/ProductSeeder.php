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
                'name' => 'iPhone 13',
                'slug' => 'iphone_13',
                'price' => '29 000 UAH',
                'image_url' => '/img/13.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 12 PRO MAX',
                'slug' => 'iphone_12_pro_max',
                'price' => '38 678 UAH',
                'image_url' => '/img/12promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,5</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 12',
                'slug' => 'iphone_12',
                'price' => '29 689 UAH',
                'image_url' => '/img/12.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 11 PRO MAX',
                'slug' => 'iphone_11_pro_max',
                'price' => '29 000 UAH',
                'image_url' => '/img/11promax.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 6,5</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 11',
                'slug' => 'iphone_11',
                'price' => '19 869 UAH',
                'image_url' => '/img/11.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone XS',
                'slug' => 'iphone_xs',
                'price' => '16 675 UAH',
                'image_url' => '/img/xs.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 5,8</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone XR',
                'slug' => 'iphone_xr',
                'price' => '19 000 UAH',
                'image_url' => '/img/xr.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 5,8</p>',
                'category_id' => 1,
            ],
            [
                'name' => 'Б/У IPHONE 13 PRO MAX',
                'slug' => 'byiphones_13_pro_max',
                'price' => '37 679 UAH',
                'image_url' => '/img/13promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,7</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE 13',
                'slug' => 'byiphones_13',
                'price' => '29 000 UAH',
                'image_url' => '/img/13.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE 12 PRO MAX',
                'slug' => 'byiphones_12_pro_max',
                'price' => '38 678 UAH',
                'image_url' => '/img/12promax.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,5</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE 12',
                'slug' => 'byiphones_12',
                'price' => '29 689 UAH',
                'image_url' => '/img/12.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE 11 PRO MAX',
                'slug' => 'byiphones_11_pro_max',
                'price' => '29 000 UAH',
                'image_url' => '/img/11promax.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 6,5</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE 11',
                'slug' => 'byiphones_11',
                'price' => '19 869 UAH',
                'image_url' => '/img/11.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE XS',
                'slug' => 'byiphones_XS',
                'price' => '16 675 UAH',
                'image_url' => '/img/xs.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 5,8</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'Б/У IPHONE XR',
                'slug' => 'byiphones_XR',
                'price' => '19 000 UAH',
                'image_url' => '/img/xr.jpg',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 5,8</p>',
                'category_id' => 5,
            ],
            [
                'name' => 'iPad 2021',
                'slug' => 'ipad_2021',
                'price' => '15 999 UAH',
                'image_url' => '/img/iPad 2019 2020 2021.webp',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 10,2</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad 2020',
                'slug' => 'ipad_2020',
                'price' => '14 000 UAH',
                'image_url' => '/img/iPad 2019 2020 2021.webp',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 10,2</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad 2019',
                'slug' => 'ipad_2019',
                'price' => '12 222 UAH',
                'image_url' => '/img/iPad 2019 2020 2021.webp',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 10,2</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Air 2022',
                'slug' => 'ipad_air_2022',
                'price' => '28 999 UAH',
                'image_url' => '/img/iPad Air 2022.webp',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 10,5</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Air 2021',
                'slug' => 'ipad_air_2021',
                'price' => '25 689 UAH',
                'image_url' => '/img/iPad Air 2021.png',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 10,5</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Air 2020',
                'slug' => 'ipad_air_2020',
                'price' => '24 000 UAH',
                'image_url' => '/img/iPad Air 2019 2020.png',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 9,7</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Air 2019',
                'slug' => 'ipad_air_2019',
                'price' => '22 999 UAH',
                'image_url' => '/img/iPad Air 2019 2020.png',
                'description' => '<p>Память: 128gb</p><p>Дисплей: 9,7</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Pro 11',
                'slug' => 'ipad_pro_11',
                'price' => '38 999 UAH',
                'image_url' => '/img/iPad Pro 11.jfif',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 11</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Pro 12.9',
                'slug' => 'ipad_pro_12.9',
                'price' => '46 777 UAH',
                'image_url' => '/img/iPad Pro 12 9.webp',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 12,9</p>',
                'category_id' => 2,
            ],
            [
                'name' => 'WATCH Series 3',
                'slug' => 'watch_series_3',
                'price' => '6489 UAH',
                'image_url' => '/img/w3,4.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 3,
            ],
            [
                'name' => 'WATCH Series 4',
                'slug' => 'watch_series_4',
                'price' => '9600 UAH',
                'image_url' => '/img/w3,4.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 3,
            ],
            [
                'name' => 'WATCH Series 5',
                'slug' => 'watch_series_5',
                'price' => '11 876 UAH',
                'image_url' => '/img/w5.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 3,
            ],
            [
                'name' => 'WATCH Series 6',
                'slug' => 'watch_series_6',
                'price' => '13 651 UAH',
                'image_url' => '/img/w6.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 3,
            ],
            [
                'name' => 'WATCH Series 7',
                'slug' => 'watch_series_7',
                'price' => '14 675 UAH',
                'image_url' => '/img/w7.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 3,
            ],
            [
                'name' => 'ACCESSORY 5W',
                'slug' => 'accessory_5w',
                'price' => '499 UAH',
                'image_url' => '/img/Aksesuary/5w.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY 20W',
                'slug' => 'accessory_20w',
                'price' => '1299 UAH',
                'image_url' => '/img/Aksesuary/20w.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Air Pro',
                'slug' => 'accessory_air_pro',
                'price' => '200 UAH',
                'image_url' => '/img/Aksesuary/Air Pro.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Air',
                'slug' => 'accessory_air',
                'price' => '150 UAH',
                'image_url' => '/img/Aksesuary/Air.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Air Pro',
                'slug' => 'accessory_air_pro',
                'price' => '150 UAH',
                'image_url' => '/img/Aksesuary/Air Pro.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY C - Lightning',
                'slug' => 'accessory_c_-_lightning',
                'price' => '350 UAH',
                'image_url' => '/img/Aksesuary/C - LGHT.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Lightning',
                'slug' => 'accessory_lightning',
                'price' => '250 UAH',
                'image_url' => '/img/Aksesuary/usb lght.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Air Pro',
                'slug' => 'accessory_air_pro',
                'price' => '150 UAH',
                'image_url' => '/img/Aksesuary/Air Pro.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo 13 PRO MAX',
                'slug' => 'accessory_zachsklo_13_pro_max',
                'price' => '500 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo 12 PRO MAX',
                'slug' => 'accessory_zachsklo_12_pro_max',
                'price' => '500 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo 11 PRO MAX',
                'slug' => 'accessory_zachsklo_11_pro_max',
                'price' => '500 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo 13',
                'slug' => 'accessory_zachsklo_13',
                'price' => '450 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo 12',
                'slug' => 'accessory_zachsklo_12',
                'price' => '450 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo 11',
                'slug' => 'accessory_zachsklo_11',
                'price' => '450 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo XR',
                'slug' => 'accessory_zachsklo_XR',
                'price' => '350 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo XS',
                'slug' => 'accessory_zachsklo_XS',
                'price' => '350 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY ZachSklo X',
                'slug' => 'accessory_zachsklo_X',
                'price' => '350 UAH',
                'image_url' => '/img/Aksesuary/zah sklo.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Checkhol 12 PRO MAX',
                'slug' => 'accessory_Checkhol_12_pro_max',
                'price' => '650 UAH',
                'image_url' => '/img/Aksesuary/iP 12 PRO MAX.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Checkhol 13',
                'slug' => 'accessory_Checkhol_13',
                'price' => '600 UAH',
                'image_url' => '/img/Aksesuary/iP 13.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Checkhol 12',
                'slug' => 'accessory_Checkhol_12',
                'price' => '600 UAH',
                'image_url' => '/img/Aksesuary/iP 12.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Checkhol 11',
                'slug' => 'accessory_Checkhol_11',
                'price' => '500 UAH',
                'image_url' => '/img/Aksesuary/iP 11.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
            [
                'name' => 'ACCESSORY Checkhol XR',
                'slug' => 'accessory_Checkhol_xr',
                'price' => '450 UAH',
                'image_url' => '/img/Aksesuary/iP xr.jpg',
                'description' => '<p>Память: 256gb</p><p>Дисплей: 6,1</p>',
                'category_id' => 4,
            ],
        ];

        foreach ($data as $item) {
            Product::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
