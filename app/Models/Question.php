<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model  implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public $translatedAttributes = ['title', 'content', 'answer'];

    protected $fillable = [
        'theme_id',
        'active',
        'slug',
        'image',
    ];

    public function themes(){
        return $this->belongsTo(Theme::class);
    }

}
