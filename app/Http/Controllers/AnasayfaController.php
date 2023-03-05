<?php

namespace App\Http\Controllers;

class AnasayfaController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.anasayfa.index');
    }
}
