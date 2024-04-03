<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait saveToPhotoFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param $path
     * @param $file
     * @param $fileName
     * @return string
     */
    // public static function saveToPhotoFolder($path,$file, $fileName): string
    // {
    //     // Validate the file object
    //     if(!($file instanceof UploadedFile)) {
    //         throw new InvalidArgumentException('Invalid file provided.');
    //     }

    //    // Use the UUID as the filename
    //     $savedFileName = $fileName . '.' . $file->getClientOriginalExtension();

    //    // Save the file in the specified path using Laravel's Storage facade
    //     Storage::putFileAs('public/patient/' . $path, $file, $savedFileName);

    //     return $savedFileName;
    // }
    public static function saveToPhotoFolder($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/patient/'.$path, $savedFileName);

        return $savedFileName;
    }
}
