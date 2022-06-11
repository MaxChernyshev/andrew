<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model implements TranslatableContract
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


    public $translatedAttributes = ['title', 'content', 'answer'];

    protected $fillable = [
        'subject_id',
        'active',
        'slug',
        'image',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

}
