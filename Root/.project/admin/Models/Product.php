<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded =['id','created_at','deleted_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    protected $dates =['deleted_at'];
    
    public function child()
    {
        return $this->hasMany(Product::class , 'parent_id' , 'id');
    }
    public function parent()
{
    return $this->belongsTo(self::class, 'parent_id');

}

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function comments()
    {
        // dd(123);
        return $this->hasMany(\Admin\Models\Coment::class,'product_id');
    }
    public function keywords()
    {
        return $this->belongsToMany(\Admin\Models\Keyword::class, 'product_keyword', 'product_id','keyword_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'athers_id');
    }
    public function category()
    {
        return $this->belongsTo(\Admin\Models\Category::class,'category_id');
    }
}
