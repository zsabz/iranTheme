<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    
    use HasFactory;
    protected $guarded =['id','created_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    // protected $dates =['deleted_at'];
    
}
