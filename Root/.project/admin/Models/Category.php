<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','deleted_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    protected $dates =['deleted_at'];
    
    public function child()
    {
        return $this->hasMany(Category::class , 'parent_id' , 'id');
    }
    public function parent()
{
    return $this->belongsTo(self::class, 'parent_id');

}




    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
