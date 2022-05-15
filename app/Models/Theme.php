<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;


class Theme extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'en_title'
            ]
        ];
    }


    public $translatedAttributes = ['title', 'content'];

    protected $fillable = [
        'active',
        'slug',
        'image',
    ];


    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function scopeActive($query, $val)
    {
        return $query->where('active', true);
    }
}
