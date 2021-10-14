<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'status'];

    protected static function booted()
    {
        static::creating(function (Client $client) {
            $client->slug = Str::slug($client->name);
        });
    }
    public static function validateRule($id = null)
    {
        return [

            'name' => 'required|max:255',
            'image' => 'required',
            'status' => 'required|in:Active,Draft',


        ];
    }
}
