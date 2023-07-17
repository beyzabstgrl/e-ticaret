<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      About::create([
          'name'=>'pratik shop e-ticaret',
          'content'=>'hakkimizda yazisi burada',
          'text_1_icon'=>'icon-truck',
          'text_1'=>'ücretsiz kargo',
          'text_1_content'=>'ürünlerinizi ücretsiz kargo saglariz',
          'text_2_icon'=>'icon-refresh2',
          'text_2'=>'Geri iade',
          'text_2_content'=>'30 gün icinde gerei iade saglariz',
          'text_3_icon'=>'icon-help',
          'text_3'=>'destek',
          'text_3_content'=>'7-24 bize ulasabilirsiniz',
      ]);
    }
}
