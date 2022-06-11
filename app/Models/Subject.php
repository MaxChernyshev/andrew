<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Support\Str;


class Subject extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected static function boot()
    {
        parent::boot();

        // registering a callback to be executed upon the creation of an activity AR
        static::creating(function ($subject)
        {
            // produce a slug based on the activity title
            $slug = Str::slug($subject->translate()->title);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $subject->slug = $count ? "{$slug}-{$count}" : $slug;
        });
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

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
