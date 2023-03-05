<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullanicilarController extends Controller
{
    public function index(){
        return view('pages.kullanicilar.index');
    }
}
