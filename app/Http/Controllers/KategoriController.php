<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{   
    public function index(){
        return view('pages.kategori.index');
    }
    public function store(Request $request){
        $kategori = Kategori::create([
            'kategori_ismi' => $request->kategori_ismi,
        ]);
        return response()->json($kategori);
    }
}
