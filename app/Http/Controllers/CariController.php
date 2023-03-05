<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cari;
use App\Models\Ulke;
use App\Models\Sehir;
use App\Models\Ilce;
use App\Models\Diller;
use DataTables;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
class CariController extends Controller
{
    public function index(){
        return view('pages.cari.index');
    }

    public function store(Request $request){
        if($request->ulke != null ){
            if(!Ulke::where('id' , $request->ulke)->exists()){
                return false;
            }
        }else{
            $request->ulke = 0;
        }
        if($request->sehir != null){
            if(!Sehir::where('id' , $request->sehir)->exists()){
                return false;
            }
        }else{
            $request->sehir = 0;
        }
        if($request->ilce != null){
            if(!İlce::where('id' , $request->ilce)->exists()){
                return false;
            }
        }else{
            $request->ilce = 0;
        }
        if($request->dil != null){
            if(!Diller::where('id' , $request->dil)->exists()){
                return false;
            }
        }else{
            $request->dil = 0;
        }
        if($request->whatsapp_numarasi_farkli_mi == null){
            $request->whatsapp_numarasi_farkli_mi = 'HAYIR';
        }
        $cari = Cari::create([
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'cinsiyet' => $request->cinsiyet,
            'dogum_tarihi' => $request->dogum_tarihi,
            'ulke' => $request->ulke,
            'sehir' => $request->sehir,
            'ilce' => $request->ilce,
            'dil' => $request->dil,
            'iletisime_gecilecek_kisi' => $request->iletisime_gecilecek_kisi,
            'kisiye_ait_telefon_numarasi' => $request->kisiye_ait_telefon_numarasi,
            'whatsapp_numarasi_farkli_mi' => $request->whatsapp_numarasi_farkli_mi,
            'whatsapp_numarasi' => $request->whatsapp_numarasi,
            'email' => $request->email,
            'saglayici' => $request->saglayici,
            'dark_reklam_kabul_ediyor_mu' => $request->dark_reklam_kabul_ediyor_mu,
            'evinde_evcil_hayvan_besliyor_mu' => $request->evinde_evcil_hayvan_besliyor_mu,
            'organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu' => $request->organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu,
            'sehir_disi_etkinliklere_seyehay_engeli_var_mi' => $request->sehir_disi_etkinliklere_seyehay_engeli_var_mi,
            'sirketi_var_mi' => $request->sirketi_var_mi,
            'urun_karsiligi_tanitim_yapiyor_mu' => $request->urun_karsiligi_tanitim_yapiyor_mu
        ]);

        return response()->json($cari);
    }

    public function list(Request $request){
        $model = Cari::with(['ulke' , 'sehir' , 'ilce' , 'language']);
        return Datatables::of($model)
        ->addColumn('saglayici' , function($data){
            if($data->saglayici != null){
                return $data->saglayici->ad;
            }else{
                return "YOK";
            }
        })
        ->editColumn('ad' , function($data){
            if($data->ad != null){
                return $data->ad;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('soyad' , function($data){
            if($data->soyad != null){
                return $data->soyad;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('dogum_tarihi' , function($data){
            if($data->dogum_tarihi != null){
                return $data->dogum_tarihi;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('iletisime_gecilecek_kisi' , function($data){
            if($data->iletisime_gecilecek_kisi != null){
                return $data->iletisime_gecilecek_kisi;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('ulke.baslik' , function($data){
            if($data->ulke != null){
                return $data->ulke->baslik;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('sehir.baslik' , function($data){
            if($data->sehir != null){
                return $data->sehir->baslik;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('ilce.baslik' , function($data){
            if($data->ilce != null){
                return $data->ilce->baslik;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('language.name' , function($data){
            if($data->language != null){
                return $data->dil->name;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('kisiye_ait_telefon_numarasi' , function($data){
            if($data->kisiye_ait_telefon_numarasi != null){
                return $data->kisiye_ait_telefon_numarasi;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('whatsapp_numarasi' , function($data){
            if($data->whatsapp_numarasi != null){
                return $data->whatsapp_numarasi;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('email' , function($data){
            if($data->email != null){
                return $data->email;
            }else{
                return "BOŞ";
            }
        })
        ->editColumn('created_at' , function($data){
            return $data->created_at->format('d/m/Y H:i:s');
        })
        ->editColumn('updated_at' , function($data){
            return $data->updated_at->format('d/m/Y H:i:s');
        })
        ->make(true);
    }

    public function search(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Cari::where('ad', 'like', '%' .$search . '%')->orWhere('soyad' , 'like', '%'  . $search . '%')->count();
            if($count > 0){
                $cariler = Cari::where('ad', 'like', '%' .$search . '%')->orWhere('soyad' , 'like', '%'  . $search . '%')->get();
                $response = array();
                foreach($cariler as $cari){
                    $response[] = array(
                        "id"=>$cari->id,
                        "text"=>$cari->ad,
                    );
                }
                return response()->json($response);
            }
        }
    }

    public function searchUlke(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Ulke::where('baslik', 'like', '%' .$search . '%')->count();
            if($count > 0){
                $ulkeler = Ulke::where('baslik', 'like', '%' .$search . '%')->get();
                $response = array();
                foreach($ulkeler as $ulke){
                    $response[] = array(
                        "id"=>$ulke->id,
                        "text"=>$ulke->baslik,
                    );
                }
                return response()->json($response);
            }
        }
    }

    public function searchSehir(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Sehir::where('baslik', 'like', '%' .$search . '%')->count();
            if($count > 0){
                $sehirler = Sehir::where('baslik', 'like', '%' .$search . '%')->get();
                $response = array();
                foreach($sehirler as $sehir){
                    $response[] = array(
                        "id"=>$sehir->id,
                        "text"=>$sehir->baslik,
                    );
                }
                return response()->json($response);
            }
        }
    }

    public function searchIlce(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Ilce::where('baslik', 'like', '%' .$search . '%')->count();
            if($count > 0){
                $ilceler = Ilce::where('baslik', 'like', '%' .$search . '%')->get();
                $response = array();
                foreach($ilceler as $ilce){
                    $response[] = array(
                        "id"=>$ilce->id,
                        "text"=>$ilce->baslik,
                    );
                }
                return response()->json($response);
            }
        }
    }

    public function searchDil(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Diller::where('name', 'like', '%' .$search . '%')->count();
            if($count > 0){
                $diller = Diller::where('name', 'like', '%' .$search . '%')->get();
                $response = array();
                foreach($diller as $dil){
                    $response[] = array(
                        "id"=>$dil->id,
                        "text"=>$dil->name,
                    );
                }
                return response()->json($response);
            }
        }
    }
}
