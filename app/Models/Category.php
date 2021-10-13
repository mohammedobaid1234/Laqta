<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'image', 'status'];


    public function Projects()
    {
        return $this->hasMany(Project::class, 'category_id', 'id');
    }
    protected static function booted()
    {
        static::creating(function (Category $category) {
            $category->slug = Str::slug($category->name);
        });
    }
    public static function validateRule($id = null)
    {
        return [

            'name' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable',
            'color' => 'nullable',
            'status' => 'required|in:Active,Draft',
            'range' => 'nullable',

        ];
    }
}
