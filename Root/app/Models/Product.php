<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[''];
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function previews()
    {
        return $this->hasMany(pre_view::class);
    }
    public function getUpdatedAtAttribute($value){
        return verta($value)->formatDifference();
    }

    public function scopeSearch(Builder $query,  $q): void
    {
        if(isset($q['q'])){
            
            $query->where('title','like' ,"%{$q['q']}%");
        }
    }
    public function scopeFilter(Builder $q,  $category){
        if($category !=null){
        // dd();
        $q->whereHas('categories', function ($query) use($category) {
            $query->where('title',$category);
            });

        }

    }
}