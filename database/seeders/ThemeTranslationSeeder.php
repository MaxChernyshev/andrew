<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\ThemeTranslation;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ThemeTranslationSeeder extends Seeder
{

    protected $model = ThemeTranslation::class;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ThemeTranslation::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();

        $ids = Theme::all()->pluck('id')->toArray();

        foreach ($ids as $id) {
            ThemeTranslation::create([
                'theme_id' => $id,
                'locale' => 'en',
                'title' => 'theme' . $id,
                'content' => $faker->paragraph(),
            ]);
            ThemeTranslation::create([
                'theme_id' => $id,
                'locale' => 'fr',
                'title' => 'le thème' . $id,
                'content' => $faker->paragraph(),
            ]);
        }
    }
}
