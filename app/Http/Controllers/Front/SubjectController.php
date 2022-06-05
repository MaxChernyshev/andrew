<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('translation')
            ->where('active', true)
            ->get();

        return view('front.faq', compact('subjects'));
    }

    public function show(Subject $subject)
    {
        $subject = $subject->with('questions.translations', 'translations', 'questions')->where('id', $subject->id)->first();

        $questions = Question::where('subject_id', $subject->id)->get();

        return view('front.show-question', compact('subject', 'questions'));
    }
}
