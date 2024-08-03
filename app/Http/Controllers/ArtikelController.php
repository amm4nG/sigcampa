<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        return view('admin.artikel.index');
    }

    public function create(){
        return view('admin.artikel.create');
    }
}
