<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassChapter extends Model
{
    use HasFactory;

    public function chapterContents()
    {
        return $this->hasMany(ChapterContent::class, 'chapter_id');
    }
}
