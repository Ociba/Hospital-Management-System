<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait SaveToStudentFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param $path
     * @param $file
     * @param $fileName
     * @return string
     */
    public static function saveToStudentFolder($path,$file, $fileName): string
    {
        // Validate the file object
        if(!($file instanceof UploadedFile)) {
            throw new InvalidArgumentException('Invalid file provided.');
        }

       // Use the UUID as the filename
        $savedFileName = $fileName . '.' . $file->getClientOriginalExtension();

       // Save the file in the specified path using Laravel's Storage facade
        Storage::putFileAs('public/students/' . $path, $file, $savedFileName);

        return $savedFileName;
    }
}
