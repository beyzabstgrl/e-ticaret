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
            'slug'=>'erkek-giyim'

    ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$erkek->id,
            'name'=>'erkek kazak',
            'content'=>'Erkek kazaklar',
            'status'=>'1',
             'slug'=>'erkek-kazak'

        ]);
       Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$erkek->id,
            'name'=>'erkek pantolon',
            'content'=>'Erkek pantolonlar',
            'status'=>'1',
            'slug'=>'erkek-pantolon'

        ]);
        $kadin=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'kadin',
            'content'=>'Kadin Giyim ',
            'status'=>'1',
            'slug'=>'kadin-giyim'

        ]);
         Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$kadin->id,
            'name'=>'kadin canta',
            'content'=>'Kadin cantalar ',
            'status'=>'1',
            'slug'=>'kadin-canta'

        ]);
         Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$kadin->id,
            'name'=>'kadin pantolon',
            'content'=>'Kadin pantolonlar ',
            'status'=>'1',
            'slug'=>'kadin-pantolon'

        ]);
        $cocuk=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'cocuk',
            'content'=>'Cocuk Giyim ',
            'status'=>'1',
            'slug'=>'cocuk-giyim'

        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$cocuk->id,
            'name'=>'cocuk oyuncak',
            'content'=>'Cocuk oyuncaklar ',
            'status'=>'1',
             'slug'=>'cocuk-oyuncak'

        ]);
          Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$cocuk->id,
            'name'=>'cocuk pantolon',
            'content'=>'Cocuk pantolonlar ',
            'status'=>'1',
            'slug'=>'cocuk-pantolon'

        ]);
    }
}
