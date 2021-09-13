<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function namanim(){
        return "Nama : Reihan Amru <br>
        NIM : 2031710082";
    }
    public function articles(){
        return "Halaman Artikel 1".$id();
    }
}
