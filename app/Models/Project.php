<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'secondary', 'number', 'description', 'image', 'status', 'category_id'];

    public static function booted()
    {

        static::creating(function (Project $project) {
            $project->slug = Str::slug($project->name);
            $project->number = 1;
        });
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public static function validateRule($id = null)
    {
        return [

            'name' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable',
            'secondary' => 'required',
            'status' => 'required|in:Active,Draft',
            'range' => 'nullable',
            'category_id' => 'required',
            'number' => 'required',

        ];
    }
}
