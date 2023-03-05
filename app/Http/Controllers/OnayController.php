<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnayController extends Controller
{
    public function index(){
        return view('pages.onay-bekleyenler.index');
    }

    public function basvuru_index(){
        return view('pages.onay-bekleyenler.basvuru_formu');
    }
}
