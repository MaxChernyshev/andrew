<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Question;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::withTranslation()->get();

        $subjects = Subject::withTranslation()->get();

        if ($request->search) {

            $subjects = Subject::whereTranslationLike('title', '%' . $request->search . '%')
                ->orWhereTranslationLike('content', '%' . $request->search . '%')
                ->get();

            $questions = Question::whereTranslationLike('title', '%' . $request->search . '%')
                ->orWhereTranslationLike('content', '%' . $request->search . '%')
                ->get();
        }

        return view('front.search', compact('subjects', 'questions'));
    }

}
