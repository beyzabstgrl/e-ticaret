<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek= Category::create([
             'image'=>null,
             'thumbnail'=>null,
             'cat_ust'=>null,
             'name'=>'erkek',
             'content'=>'Erkek Giyim ',
             'status'=>'1',

    ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$erkek->id,
            'name'=>'erkek kazak',
            'content'=>'Erkek kazaklar',
            'status'=>'1',

        ]);
       Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$erkek->id,
            'name'=>'erkek pantolon',
            'content'=>'erkek pantolonlar',
            'status'=>'1',

        ]);
        $kadin=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'kadin',
            'content'=>'kadin Giyim ',
            'status'=>'1',

        ]);
         Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$kadin->id,
            'name'=>'kadin canta',
            'content'=>'kadin cantalar ',
            'status'=>'1',

        ]);
         Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$kadin->id,
            'name'=>'kadin pantolon',
            'content'=>'kadin pantolonlar ',
            'status'=>'1',


        ]);
        $cocuk=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'cocuk',
            'content'=>'cocuk Giyim ',
            'status'=>'1',

        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$cocuk->id,
            'name'=>'cocuk oyuncak',
            'content'=>'cocuk oyuncaklar ',
            'status'=>'1',


        ]);
          Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$cocuk->id,
            'name'=>'cocuk pantolon',
            'content'=>'Cocuk pantolonlar ',
            'status'=>'1',
           

        ]);
    }
}
