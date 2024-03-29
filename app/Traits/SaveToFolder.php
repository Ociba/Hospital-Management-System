<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use \InvalidArgumentException;
use Modules\Documents\Entities\Document;

trait SaveToFolder
{
    /**
     * this function saves any attachment to a folder
     */
    public static function saveItemToFolder($path, $file, $fileName): string
    {
        // Validate the file object
       // Validate the file object
    if (!($file instanceof \Illuminate\Http\UploadedFile)) {
        throw new InvalidArgumentException('Invalid file object provided.');
    }

    // Generate a unique filename using the provided $fileName
    $savedFileName = $fileName . '.' . $file->getClientOriginalExtension();

    // Store the file in the specified path using Laravel's Storage facade
    Storage::putFileAs('public/attachments/'.$path, $file, $savedFileName);

    return $savedFileName;
    }
}
