<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subject as SubjectModel;
use App\Services\UploadImageService;
use App\Traits\LocaleRules;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Subject extends Component
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
        $subjects = SubjectModel::query();
        $perPage = $this->perPage;

        $subjects = $subjects
            ->with('translations')
            ->whereTranslationLike('title', '%' . $this->search . '%')
            ->orWhereTranslationLike('content', '%' . $this->search . '%')
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate($perPage);


        return view('livewire.admin.subject', compact('subjects'))
            ->extends('admin.layouts.layout')
            ->section('content');
    }

    public function switchActive($theme)
    {
        $item = SubjectModel::where('id', $theme)->first();

        $item->active == 1 ? $item->update(['active' => false]) : $item->update(['active' => true]);
    }

    public function delete($id, UploadImageService $imageService)
    {
        try
        {
            $subject = SubjectModel::find($id)->delete();
            $file = $subject->image;
            dd($file);
            if ($file) {
                $imageService->deleteImage($file);
            }
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

