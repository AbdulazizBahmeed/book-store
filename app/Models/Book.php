<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    protected $guarded = [];
    public static $storageFolderName = 'book-cover-images';

    public function getCoverImageUrl()
    {
        return Storage::url($this::$storageFolderName.'/'.$this->image);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
