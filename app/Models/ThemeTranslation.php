<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ThemeTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'theme_id',
        'title',
        'content',
    ];
}
