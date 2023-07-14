<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;
    protected  $fillable=[//yazdigim alana izin verir
        'image',
        'thumbnail',
        'name',
        'slug',
        'content',
        'cat_ust',
        'status',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name ' //nereyi slug yapacagımızı belırtiyor
            ]
        ];
    }
}


{


}
