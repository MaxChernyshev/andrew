<?php

namespace App\Http\Livewire\Admin;

use App\Models\Theme as ThemeModel;
use App\Models\Question as QuestionModel;
use App\Traits\LocaleRules;
use Astrotomic\Translatable\Validation\RuleFactory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Question extends Component
{
    use WithPagination;
    use WithFileUploads;
    use LocaleRules;

    protected $paginationTheme = 'bootstrap';

    public $updateMode = 'index';
    public $perPage = 10;
    public $en_title;
    public $fr_title;
    public $en_content;
    public $fr_content;
    public $title = [];
    public $content = [];
    public $newImage;
    public $image;
    public $fields = [];
    public $search = '';
    public $active;
    public $theme;
    public $theme_id;
    public $themes;
    public $sortColumnName = 'id';
    public $sortDirection = 'desc';


    public function mount()
    {
        $this->themes = ThemeModel::with('translations')->get();
// TODO сделать все переменные полей с переводами
    }

    public function render()
    {
        $questions = QuestionModel::query();

        $perPage = $this->perPage;

        $questions = $questions
            ->with('translations')
            ->whereTranslationLike('title', '%' . $this->search . '%')
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate($perPage);

        return view('livewire.admin.questions.question', compact('questions'))
            ->extends('admin.layouts.layout')
            ->section('content');
    }

    public function rules()
    {
        $rules = RuleFactory::make([
            '%title%' => ['sometimes', 'string'],
            '%content%' => ['sometimes', 'string'],
        ]);

        $newRules = [];

        foreach ($rules as $key => $value)
        {
            $newRules[str_replace('.', '_', $key)] = $value;
        }

        $rules = array_merge($newRules,
            [
                'image' => ['image', 'nullable', 'mimes:jpg,png', 'max:2048'],
                'theme_id' => ['exists:themes,id'],
            ]);

        return $rules;
    }

    public function save()
    {
        $data = $this->newRules($this->validate());

        $question = QuestionModel::create(
            $data['fields'],
        );

        if ($data['fields']['image'])
        {
            $imageUrl = $data['fields']['image']->store('question', 'public');
            $question->update([
                'image' => $imageUrl,
                // TODO SLUG must be unique
                'slug' => strtolower(str_replace(' ', '-', $question->translate('en')->title)),
            ]);
        }
        $question->update([
            'theme_id' => $data['fields']['theme_id'],
        ]);

        $this->resetInput();

        $this->updateMode = 'index';

        session()->flash('message', 'Question-Answer was created');
    }

    public function switchActive($theme)
    {
        $item = QuestionModel::where('id', $theme)->first();

        $item->active == 1 ? $item->update(['active' => false]) : $item->update(['active' => true]);

    }

    public function create()
    {
        $this->updateMode = 'create';
    }

    public function update()
    {
        $this->updateMode = 'update';
    }

    public function delete($id)
    {
        try
        {
            QuestionModel::find($id)->delete();
            session()->flash('message', "Question-Answer was deleted");
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

    public function resetInput()
    {
        $this->en_title = null;
        $this->fr_title = null;
        $this->en_content = null;
        $this->fr_content = null;
        $this->theme_id = null;
        $this->image = null;
    }

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }
}
