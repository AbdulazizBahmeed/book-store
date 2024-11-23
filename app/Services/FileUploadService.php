<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    public function uploadFile(UploadedFile $file, $directory){
        $nameFile = date('Y-m-d-H-i-s-A') . '-' . $file->getClientOriginalName();
        Storage::putFileAs($directory, $file, $nameFile);
        return $nameFile;
    }
}