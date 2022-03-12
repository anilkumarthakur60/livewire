<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image;


trait UploadImageTrait
{
    public function uploadImage(UploadedFile $file, $folder = null, $width = 600, $height = 600)
    {
        // $image = $file->storeAs('public/' . $folder, date('YmdHis') . "-" . $file->getClientOriginalName());
        $image = $file->storeAs('public/' . $folder, date('YmdHis') . "-" . $file->getClientOriginalName());

        Image::make(storage_path() . '/app/' . $image)
            ->fit($width, $height, function ($constraint) {
                $constraint->upsize();
            })
            ->save();
        return $image;
    }

    public function deleteImage($path = null)
    {
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
