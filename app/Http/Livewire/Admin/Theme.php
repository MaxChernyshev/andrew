<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Theme as ThemeModel;
use Livewire\WithPagination;

class Theme extends Component
{
    public function render()
    {
        $themes = ThemeModel::query();

        $themes = $themes
            ->with('translations')
//            ->whereTranslationLike('name', '%' . $this->search . '%')
//            ->orderByDesc('is_top')
//            ->orderByDesc('sales')
            ->paginate(10);
//        dd($themes);


        return view('livewire.admin.theme', compact('themes'))
            ->extends('admin.layouts.layout')
            ->section('content');

//        return view('livewire.admin.theme');
    }
}
