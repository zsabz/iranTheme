<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function previews()
    {
        return $this->hasMany(pre_view::class);
    }
}