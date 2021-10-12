<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'abilities'];

    protected $casts = [
        'abilities' => 'json',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'rule_user', 'rule_id', 'user_id');
    }
}
