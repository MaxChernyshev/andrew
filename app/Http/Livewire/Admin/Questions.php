<?php

namespace App\Http\Livewire\Admin;

use App\Models\Question;
use App\Models\Subject as SubjectModel;
use App\Models\Theme as ThemeModel;
use App\Models\Question as QuestionModel;
use App\Services\UploadImageService;
use App\Traits\LocaleRules;
use Astrotomic\Translatable\Validation\RuleFactory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Questions extends Component
{

    use WithPagination;
    use WithFileUploads;
    use LocaleRules;

    protected $paginationTheme = 'bootstrap';

    public $updateMode = 'index';
    public $perPage = 10;
    public $search = '';
    public $active;
    public $sortColumnName = 'id';
    public $sortDirection = 'desc';


    public function render()
    {
        $questions = Question::query();
        $perPage = $this->perPage;

        $questions = $questions
            ->with('translations')
            ->whereTranslationLike('title', '%' . $this->search . '%')
            ->orWhereTranslationLike('content', '%' . $this->search . '%')
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate($perPage);


        return view('livewire.admin.question', compact('questions'))
            ->extends('admin.layouts.layout')
            ->section('content');
    }

    public function switchActive($question)
    {
        $item = Question::where('id', $question)->first();

        $item->active == 1 ? $item->update(['active' => false]) : $item->update(['active' => true]);
    }

    public function delete($id, UploadImageService $imageService)
    {
        try
        {
            $question = Question::find($id)->delete();

            $file = $question->image;

            if ($file)
            {
                $imageService->deleteImage($file);
            }
            session()->flash('message', "Question deleted");
        } catch (\Exception $e)
        {
            session()->flash('message', "Something goes wrong");
        }
    }

    public function cancel()
    {
        $this->updateMode = 'index';
    }

    public function search()
    {
        return $this->search;
    }

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName)
        {
            $this->sortDirection = $this->swapSortDirection();
        }
        else
        {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

}
