<?php

namespace App\Models;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name','slug'];

    use HasFactory;

    public function project(){
        return $this->hasMany(Project::class);
    }
}
