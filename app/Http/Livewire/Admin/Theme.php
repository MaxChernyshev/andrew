<?php

namespace App\Http\Livewire\Admin;

use App\Models\ThemeTranslation;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Theme as ThemeModel;
use Livewire\WithPagination;
use App\Traits\LocalizationRules;
use Livewire\WithFileUploads;
use Astrotomic\Translatable\Validation\RuleFactory;
use App\Traits\LocaleRules;

use Cviebrock\EloquentSluggable\Sluggable;

class Theme extends Component
{
    use WithPagination;
    use LocalizationRules;
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
//            ->whereTranslationLike('name', '%' . $this->search . '%')
//            ->orderByDesc('is_top')
//            ->orderByDesc('sales')
            ->paginate($perPage);


        return view('livewire.admin.themes.theme', compact('themes'))
            ->extends('admin.layouts.layout')
            ->section('content');
    }


//    public function rules()
//    {
//        foreach ($this->makeLocalizationRules(true, [
//            'title' => ['sometimes', 'string'],
//            'content' => ['sometimes', 'string'],
//        ]) as $key => $value)
//        {
//            $fieldsLocalization["$key"] = $value;
//        }
//
//        $rules = [
//            'image' => ['image', 'nullable', 'mimes:jpg,png', 'max:2048'],
//        ];
//
//        $rules = array_merge($fieldsLocalization, $rules);
//
//
//        foreach ($rules as $key => $value)
//        {
//            $newRules[str_replace('.', '_', $key)] = $value;
//        }
//        $rules = $newRules;
//
//        return $rules;
//    }

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
        dd($data);

//        $fields = [
//            'fields' => [
//                'en' => [
//                    'title' => $data['en_title'],
//                    'content' => $data['en_content'],
//                ],
//                'fr' => [
//                    'title' => $data['fr_title'],
//                    'content' => $data['fr_content'],
//                ],
//
//                'slug' => 'qwwq',
//            ],
//        ];

        $theme = ThemeModel::create($data['fields']);

        dd($theme);

//        $data = $this->validate();
//
//        $fields = 'translations.';
//
//        foreach ($data as $key => $value)
//        {
//            $newRules[str_replace('_', '.', $key)] = $value;
//        }
//
//        foreach ($newRules as $key => $value)
//        {
//            $needed[$fields . $key] = $value;
//        }
//
//        $theme = ThemeModel::create($needed['translations']);
//
//        dd($theme);

//        if ($data['image'])
//        {
//            $imageUrl = $data['image']->store('theme', 'public');
//        }
//        $assa = ThemeModel::create(
//            [
//                'slug' => $data['en_title'],
//                'image' => $imageUrl,
//            ],
//        );


//        $this->resetInput();
        $this->updateMode = 'index';

        session()->flash('message', 'Theme was created');

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

    private function resetInput()
    {
        $this->en_title = null;
        $this->fr_title = null;
        $this->en_content = null;
        $this->fr_content = null;
    }
}
