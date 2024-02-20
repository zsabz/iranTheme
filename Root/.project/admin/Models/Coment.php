<?php

namespace Admin\Models;

use Admin\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coment extends Model
{
    
    protected $guarded =['id','created_at','deleted_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    protected $dates =['deleted_at'];

//   public function blog()
//     {
//         // dd(123);
//         return $this->belongsTo(\App\Models\Blog::class,'blog_id');
//     }

    public function commentable()
    {
        return $this->morphTo();        
    }
     public function replies()
    {
        // dd(123);
        return $this->hasMany(Coment::class,'parent_id');
    }
 public function child()
    {
        return $this->hasMany(Coment::class , 'parent_id' , 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    

    
    
}


