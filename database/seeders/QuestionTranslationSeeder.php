<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Schema;
use App\Models\QuestionTranslation;

class QuestionTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        QuestionTranslation::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();

        $ids = Question::all()->pluck('id')->toArray();

        foreach ($ids as $id) {
            QuestionTranslation::create([
                'question_id' => $id,
                'locale' => 'en',
                'title' => 'question ' . $id,
                'content' => $faker->paragraph(),
                'answer' => $faker->paragraph(),
            ]);
            QuestionTranslation::create([
                'question_id' => $id,
                'locale' => 'fr',
                'title' => 'la question ' . $id,
                'content' => $faker->paragraph(),
                'answer' => $faker->paragraph(),
            ]);
        }
    }
}
