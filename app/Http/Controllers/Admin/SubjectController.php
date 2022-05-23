<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject as SubjectModel;
use App\Services\UploadImageService;
use Illuminate\Http\Request;



class SubjectController extends Controller
{
    public function create()
    {
        return view('admin.subjects.create');
    }

    public function store(SubjectRequest $request)
    {
        $validated = $request->validated();

        $imageService = new UploadImageService();

        $tableName = (new SubjectModel)->getTable();

        $validated['image'] = $imageService->uploadImage($request->image, $tableName);

        SubjectModel::create($validated);

        return redirect()->route('admin.subjects')->with('success', 'Subject Created');

    }

    public function edit(SubjectModel $subject)
    {
        return view('admin.subjects.update', compact('subject'));
    }

    public function update(SubjectRequest $request, SubjectModel $subject, UploadImageService $imageService)
    {
        $tableName = (new SubjectModel)->getTable();

        $path = $subject->image;

        if ($request->image) {
            $path = $imageService->updateImage($request->image, $tableName, $subject->image);
        }

        $subject->update(array_merge($request->validated(), ['image' => $path]));

        return redirect()->route('admin.subjects');
    }

    public function destroy(SubjectModel $subject, UploadImageService $imageService)
    {
        $file = $subject->image;
        if ($file) {
            $imageService->deleteImage($file);
        }
        $subject->delete();

        return redirect()->route('admin.subjects')->with('success', 'Subject was deleted');
    }
}
