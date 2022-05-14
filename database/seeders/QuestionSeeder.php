<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Question::truncate();
        Schema::enableForeignKeyConstraints();

        $themeIds = Theme::all()->pluck('id')->toArray();

        foreach ($themeIds as $themeId)
        {

            for ($i = 1; $i < 6; $i++)
            {
                Question::create([
                    'theme_id' => $themeId,
                    'active' => true,
                    'slug' => 'question-' . $themeId. '-' . $i,
                    'image' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
