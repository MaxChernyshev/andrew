<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show(Question $question, $slug)
    {
        dd(123);
        $question = $question->with('questions.translations', 'translations', 'questions')->first();

        return view('front.themes.show', compact('question'));
    }
}
