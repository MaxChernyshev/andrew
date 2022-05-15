<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::with('questions', 'translation')->get();

        return view('front.themes.index', compact('themes'));
    }

    public function show(Theme $theme, $slug)
    {
        $theme = $theme->with('questions.translations', 'translations', 'questions')->first();

        return view('front.themes.show', compact('theme'));
    }
}
