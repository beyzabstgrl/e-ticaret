<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Urun1',
            'image'=>'images/shoe_1.jpg',
            'category_id'=>1,
            'short_text'=>'Urun 1 Kısa Bilgi',
            'price'=>100,
            'size'=>'Small',
            'color'=>'White',
            'qty'=>10,
            'status'=>1,
            'content'=>'<p>Ürün1 hakkında açıklama</p>'

        ]);
        Product::create([
            'name'=>'Urun2',

            'image'=>'images/cloth_1.jpg',
            'category_id'=>2,
            'short_text'=>'Urun 2 Kısa Bilgi',
            'price'=>150,
            'size'=>'Large',
            'color'=>'Black',
            'qty'=>5,
            'status'=>1,
            'content'=>'<p>Ürün2 hakkında açıklama</p>'

        ]);
    }
}
