<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Subject;
use App\Models\Subject as SubjectModel;
use App\Models\Question as QuestionModel;
use App\Services\UploadImageService;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
        $subjects = Subject::all();
        return view('admin.questions.create', compact('subjects'));
    }

    public function store(QuestionRequest $request)
    {
        $validated = $request->validated();

        $imageService = new UploadImageService();

        $tableName = (new QuestionModel)->getTable();

        $validated['image'] = $imageService->uploadImage($request->image, $tableName);

        QuestionModel::create($validated);

        return redirect()->route('admin.questions')->with('success', 'Question was Created');

    }

    public function edit(QuestionModel $question)
    {
        $subjects = Subject::all();
        return view('admin.questions.update', compact('question', 'subjects'));
    }

    public function update(QuestionRequest $request, QuestionModel $question, UploadImageService $imageService)
    {
        $tableName = (new QuestionModel)->getTable();

        $path = $question->image;

        if ($request->image) {
            $path = $imageService->updateImage($request->image, $tableName, $question->image);
        }

        $question->update(array_merge($request->validated(), ['image' => $path]));

        return redirect()->route('admin.questions');
    }

    public function destroy(QuestionModel $question, UploadImageService $imageService)
    {
        $file = $question->image;
        if ($file) {
            $imageService->deleteImage($file);
        }
        $question->delete();

        return redirect()->route('admin.questions')->with('success', 'Questions was deleted');
    }
}
