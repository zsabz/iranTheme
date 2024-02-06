<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class storeg extends Controller
{
    function index(){
        Storage::disk('public')->put('save.txt', 'محتوای فایل ذخیره شده در اینجا');
        dd( Storage::url('save.txt'));
    }
}
