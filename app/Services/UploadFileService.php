<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;


class UploadFileService
{

    /**
     * Display a listing of variables.
     *
     * @return $path file path
     */
    public function uploadFile($doc, $folder, $file = NULL)
    {
        $path = null;
        if ($doc) {
            if ($file) {
                Storage::delete($file);
            }
            $path = '/storage/' . $doc->store("/$folder", 'public');
        }
        return $path;
    }

    public function updateFile($doc, $folder, $file = NULL)
    {
        if ($doc) {
            $file = '/public' . substr($file, strlen('/storage'));
            Storage::delete($file);
        }

        return '/storage/' . $file->store("/$folder", 'public');
    }

    public function deleteFile($file)
    {
        if (is_array($file) or $file instanceof Collection) {
            foreach ($file as $item) {
                $oldFilePath = '/public' . substr($item->link, strlen('/storage'));
                Storage::delete($oldFilePath);
            }
        } elseif ($file) {
            $doc = '/public' . substr($file, strlen('/storage'));
            Storage::delete($doc);
        }
    }
}
