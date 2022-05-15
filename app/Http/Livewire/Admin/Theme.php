<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Theme as ThemeModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Astrotomic\Translatable\Validation\RuleFactory;
use App\Traits\LocaleRules;


class Theme extends Component
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
    public $sortColumnName = 'id';
    public $sortDirection = 'desc';


    public function mount()
    {
// TODO сделать все переменные полей с переводами
    }

    public function render()
    {
        $themes = ThemeModel::query();
        $perPage = $this->perPage;

        $themes = $themes
            ->with('translations')
            ->whereTranslationLike('title', '%' . $this->search . '%')
//            ->orWhereTranslationLike('content', '%' . $this->search . '%')
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate($perPage);


        return view('livewire.admin.themes.theme', compact('themes'))
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
            ]);

        return $rules;
    }

    public function save()
    {
        $data = $this->newRules($this->validate());

        $theme = ThemeModel::create(
            $data['fields'],
        );

        if ($data['fields']['image'])
        {
            $imageUrl = $data['fields']['image']->store('theme', 'public');
            $theme->update([
                'image' => $imageUrl,
                // TODO SLUG must be unique
                'slug' => strtolower(str_replace(' ', '-', $theme->translate('en')->title)),
            ]);
        }
        $this->resetInput();

        $this->updateMode = 'index';

        session()->flash('message', 'Theme was created');
    }

    public function switchActive($theme)
    {
        $item = ThemeModel::where('id', $theme)->first();

        $item->active == 1 ? $item->update(['active' => false]) : $item->update(['active' => true]);
//        if ($item->active == 1)
//        {
//            $item->update(['active' => false]);
//        }
//        else
//        {
//            $item->update(['active' => true]);
//        }
    }

    public function createTheme()
    {
        $this->updateMode = 'create';
    }

    public function updateTheme()
    {
        $this->updateMode = 'update';
    }

    public function deleteTheme($id)
    {
        try
        {
            ThemeModel::find($id)->delete();
            session()->flash('message', "Theme deleted");
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
