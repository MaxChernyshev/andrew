<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Theme as ThemeModel;
use Livewire\WithPagination;

class Theme extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $updateMode = 'index';
    public $perPage = 5;
    public $title;
    public $content;

//    protected $rules = [
//    ];

    public function mount()
    {
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
//        dd($themes);


        return view('livewire.admin.themes.theme', compact('themes'))
            ->extends('admin.layouts.layout')
            ->section('content');
    }

    public function createTheme()
    {
//        dd($this);
        $this->updateMode = 'create';
    }

    public function updateTheme()
    {
//        $this->updateMode = 'update';
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

    public function saveTheme()
    {
//        dd($this);

        $assa = ThemeModel::create([
            'title' => [
                'en' => $this->title,
                'fr' => $this->title,
            ],
            'content' => [
                'en' => $this->content,
                'fr' => $this->content,
            ],
            'slug' => 'assaassa',
        ]);


        dd($assa);

//        $this->resetInput();

        $this->updateMode = 'index';

        session()->flash('message', 'Theme was created');

        dd(123);
        dd($theme);
    }

    public function cancel()
    {
        $this->updateMode = 'index';
    }

//    private function resetInput()
//    {
//        $this->title = null;
//        $this->content = null;
//    }
}
