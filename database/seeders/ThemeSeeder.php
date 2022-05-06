<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\ThemeTranslation;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Schema;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        Theme::truncate();
        Schema::enableForeignKeyConstraints();

        Theme::create([
            'active' => true,
            'slug' => 'theme-01',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Theme::create([
            'active' => true,
            'slug' => 'theme-02',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Theme::create([
            'active' => true,
            'slug' => 'theme-03',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Theme::create([
            'active' => true,
            'slug' => 'theme-04',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Theme::create([
            'active' => true,
            'slug' => 'theme-05',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Theme::create([
            'active' => true,
            'slug' => 'theme-06',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
