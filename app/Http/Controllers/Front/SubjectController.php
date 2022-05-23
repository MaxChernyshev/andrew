<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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

    public function show(Subject $subject, $slug)
    {
        $subject = $subject->with('questions.translations', 'translations', 'questions')->first();

        return view('front.themes.show', compact('subject'));
    }
}
