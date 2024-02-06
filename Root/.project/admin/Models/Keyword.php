<?php


namespace Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Keyword extends Model

{
    protected $guarded =['id','created_at','deleted_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    protected $dates =['deleted_at'];
    
    public function subject()
    {
        return $this->belongsTo(App\Models\Subject::class,'subject_id');
    }
    public function blogs()
    {
        return $this->belongsToMany(Blog::class)->withPivot('created_at');
    }
    public function products()
    {
        return $this->belongsToMany(Product\Product::class)->withPivot('created_at');
    }

}
