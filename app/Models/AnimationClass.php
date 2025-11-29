<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimationClass extends Model
{
    use HasFactory;

    public function classChapters()
    {
        return $this->hasMany(ClassChapter::class, 'class_id');
    }
}
