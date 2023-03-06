<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'image'];
    use HasFactory;

    public static function createSlug($title){
        return Str::slug($title, '-');
    }
}
