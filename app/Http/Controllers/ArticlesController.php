<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles(){
        return "Halaman Artikel 1".$id();
    }
}
