<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'paragraph1',
        'title',
        'paragraph2',
        'slider',
        'video1',
        'video2',
        'poster_image'
    ];
}
