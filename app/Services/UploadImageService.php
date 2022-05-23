<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;


class UploadImageService
{
    public function uploadImage($file, $folder, $image = NULL)
    {
        $name = null;
        if ($file) {
            if ($image) {
                Storage::delete($image);
            }
            $name = '/storage/' . $file->store("/$folder", 'public');
        }
        return $name;
    }

    public function uploadProfileImage($file, $user)
    {
        $name = null;

        if ($file) {
            if ($user->photo) {
                $img = $user->photo;
                $img = str_replace('/storage/', '', $img);
                Storage::disk('profile_photos')->delete($img);
            }
            $name = Storage::disk('profile_photos')->url($file->store('photos/profile/'.$user->id, 'profile_photos'));
        }
        return $name;
    }

    public function deleteProfileImage($user)
    {
        if ($user->photo) {
            $img = $user->photo;
            $img = str_replace('/storage/', '', $img);
            return Storage::disk('profile_photos')->delete($img);
        } else {
            return false;
        }
    }


    public function updateImage($file, $folder, $image = NULL)
    {
        if ($image) {
            $image = '/public' . substr($image, strlen('/storage'));
            Storage::delete($image);
        }

        return '/storage/' . $file->store("/$folder", 'public');
    }

    public function deleteImage($image)
    {
        if (is_array($image) or $image instanceof Collection) {
            foreach ($image as $media) {
                $oldImagePath = '/public' . substr($media->link, strlen('/storage'));
                Storage::delete($oldImagePath);
            }
        } elseif ($image) {
            $image = '/public' . substr($image, strlen('/storage'));
            Storage::delete($image);
        }
    }
}
