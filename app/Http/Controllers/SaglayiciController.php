<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Saglayici;
use DataTables;
use Illuminate\Support\Str;
class SaglayiciController extends Controller
{
    public function index(){
        return view('pages.saglayici.index');
    }

    public function store(Request $request){
        $saglayici = Saglayici::create([
            'ad' => $request->ad,
            'ajans_adi' => $request->ajans_adi,
            'email' => $request->email,
            'saglayici_tipi' => $request->saglayici_tipi,
            'soyad' => $request->soyad,
            'telefon' => $request->telefon,
            'yetkili' => $request->yetkili,
        ]);

        return response()->json($saglayici);
    }

    public function list(Request $request){
        $model = Saglayici::query();
        return Datatables::of($model)
        ->addColumn('isim', function ($data) {
            if($data->saglayici_tipi == 'SAHIS'){
                return $data->ad . " " . $data->soyad;
            }
            if($data->saglayici_tipi == 'AJANS'){
                return $data->ajans_adi;
            }
        })
        ->editColumn('created_at' , function($data){
            return $data->created_at->format('d/m/Y H:i:s');
        })
        ->editColumn('updated_at' , function($data){
            return $data->updated_at->format('d/m/Y H:i:s');
        })
        ->filterColumn('isim', function($query, $keyword) {
            $query->orWhere('saglayici.ad','like', "%{$keyword}%")
            ->orWhere('saglayici.soyad','like', "%{$keyword}%")->orWhere('saglayici.ajans_adi','like', "%{$keyword}%");
        })
        ->make(true);
    }

    public function search(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Saglayici::where('ad', 'like', '%' .$search . '%')->orWhere('soyad' , 'like', '%'  . $search . '%')->orWhere('ajans_adi' , 'like', '%'  . $search . '%')->count();
            if($count > 0){
                $saglayicilar = Saglayici::where('ad', 'like', '%' .$search . '%')->orWhere('soyad' , 'like', '%'  . $search . '%')->orWhere('ajans_adi' , 'like', '%'  . $search . '%')->get();
                $response = array();
                foreach($saglayicilar as $saglayici){
                    $response[] = array(
                        "id"=>$saglayici->id,
                        "text"=>$saglayici->ad . " " . $saglayici->soyad . " " . $saglayici->ajans_adi,
                    );
                }
                return response()->json($response);
            }
        }
    }
}
