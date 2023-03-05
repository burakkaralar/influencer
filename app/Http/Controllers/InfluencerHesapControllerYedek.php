<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\InfluencerHesap;
use DataTables;
use Illuminate\Support\Str;
use App\Models\Cari;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
class InfluencerHesapController extends Controller
{
    public function index(){
        return view('pages.influencer-hesap.index');
    }

    public function dropzone_istatistik(Request $request){
        return $request->file('file')->store('images');
    }

    public function store(Request $request){
        
        if(!Cari::where('id' , $request->influencer_cari)->exists()){
            return response('{"message":"Cari kaydı bulunamadı."}')->json($influencerHesap);
        }
        if($request->etiketler != null) {
            $etiketler = json_decode($request->etiketler);
            $etiketlerArr = Arr::pluck($etiketler, 'value');
            $request->etiketler = json_encode($etiketlerArr);
        }

        if($request->dropzone_files != null) {
           $request->dropzone_files = json_encode($request->dropzone_files);
        }
        $guncellenme_tarihi = Carbon::now();
        
        
        if($request->has('profil_linkleri') && $request->has('platform') && $request->platform == 'INSTAGRAM'){
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => 'db6dbdc002msha55659e485f0443p12b26djsnffe11f664cef',
                'X-RapidAPI-Host' => 'instagram-data1.p.rapidapi.com'
            ])->get('https://instagram-data1.p.rapidapi.com/user/info', [
                'username' => $request->profil_linkleri,
            ]);
            if($response->successful()){
                if(!$response['is_private']){
                    function postlaraBak($next_max_id = null , $request){
                        if($next_max_id == null){
                            $response = Http::withHeaders([
                                'X-RapidAPI-Key' => 'db6dbdc002msha55659e485f0443p12b26djsnffe11f664cef',
                                'X-RapidAPI-Host' => 'instagram-data1.p.rapidapi.com'
                            ])->get('https://instagram-data1.p.rapidapi.com/user/feed/v2', [
                                'username' => $request->profil_linkleri,
                            ]);
                        }else{
                            $response = Http::withHeaders([
                                'X-RapidAPI-Key' => 'db6dbdc002msha55659e485f0443p12b26djsnffe11f664cef',
                                'X-RapidAPI-Host' => 'instagram-data1.p.rapidapi.com'
                            ])->get('https://instagram-data1.p.rapidapi.com/user/feed/v2', [
                                'username' => $request->profil_linkleri,
                                'end_cursor' => $next_max_id,
                                'limit' => 30
                            ]);
                        }
                        return $response;
                    }
                    $toplamTakipciSayisi = $response['edge_followed_by']['count'];
                    $toplamTakipEttigiSayisi = $response['edge_follow']['count'];
                    $maxLimit = 12;
                    $start = 0;

                    function postlaraBak2($start = 0 , $maxLimit = 12 , $next_max_id = null , $toplamBegeniSayisi  = 0 , $toplamYorumSayisi   = 0 , $request){
                        $arr = [];
                        if($start == 0 && $next_max_id == null){
                            $postlar = postlaraBak(null, $request);
                        }else{
                            $postlar = postlaraBak($next_max_id , $request);
                        }
                        foreach($postlar['items'] as $key => $value){
                            if($start < 12){
                                if($value['media_type'] == "8"){
                                    $toplamBegeniSayisi = $toplamBegeniSayisi + $value['like_count'];
                                    $toplamYorumSayisi  = $toplamYorumSayisi  + $value['comment_count'];
                                    $start++;
                                }
                            }
                        }

                        if($start < 12 && $postlar['more_available']){
                            return postlaraBak2($start,12,$postlar['next_max_id'],$toplamBegeniSayisi,$toplamYorumSayisi , $request);
                        }else{
                            $arr = [
                                'kac_post'           => $start,
                                'toplamBegeniSayisi' => $toplamBegeniSayisi,
                                'toplamYorumSayisi'  => $toplamYorumSayisi
                            ];
                        }
                        return $arr;
                    }

                    $postlaraBakSonuclari = postlaraBak2(0,12,null,0,0,$request);
                    $toplamEtkilesimSayisi = $postlaraBakSonuclari['toplamBegeniSayisi'] + $postlaraBakSonuclari['toplamYorumSayisi'];
                    $sonuc = $toplamEtkilesimSayisi / $toplamTakipciSayisi / $postlaraBakSonuclari['kac_post']  * 100;
                    $profil_resmi = $response['profile_pic_url'];
                    $influencerHesap = InfluencerHesap::create([
                        'influencer_cari' => $request->influencer_cari,
                        'platform' => $request->platform,
                        'profil_linkleri' => $request->profil_linkleri,
                        'etiketler' => $request->etiketler,
                        'dropzone_files' => $request->dropzone_files,
                        'instagram_son_guncellenme' => $guncellenme_tarihi,
                        'toplam_takipci'            => $toplamTakipciSayisi,
                        'toplam_takip_edilen'       => $toplamTakipEttigiSayisi,
                        'son_begeni_toplami'        => $postlaraBakSonuclari['toplamBegeniSayisi'],
                        'son_yorum_toplami'         => $postlaraBakSonuclari['toplamYorumSayisi'],
                        'kac_posta_bakildi'         => $postlaraBakSonuclari['kac_post'],
                        'profil_resmi'              => $profil_resmi,
                        'etkilesim_orani'           => $sonuc
                    ]);
                }else{
                    $toplamTakipciSayisi = $response['edge_followed_by']['count'];
                    $toplamTakipEttigiSayisi = $response['edge_follow']['count'];
                    $profil_resmi = $response['profile_pic_url'];
                    $influencerHesap = InfluencerHesap::create([
                        'influencer_cari' => $request->influencer_cari,
                        'platform' => $request->platform,
                        'profil_linkleri' => $request->profil_linkleri,
                        'etiketler' => $request->etiketler,
                        'dropzone_files' => $request->dropzone_files,
                        'instagram_son_guncellenme' => $guncellenme_tarihi,
                        'toplam_takipci'            => $toplamTakipciSayisi,
                        'toplam_takip_edilen'       => $toplamTakipEttigiSayisi,
                        'son_begeni_toplami'        => 0,
                        'son_yorum_toplami'         => 0,
                        'kac_posta_bakildi'         => 0,
                        'profil_resmi'              => $profil_resmi,
                        'etkilesim_orani'           => 0
                    ]);
                }
            }else{
                $influencerHesap = InfluencerHesap::create([
                    'influencer_cari' => $request->influencer_cari,
                    'platform' => $request->platform,
                    'profil_linkleri' => $request->profil_linkleri,
                    'etiketler' => $request->etiketler,
                    'dropzone_files' => $request->dropzone_files,
                    'instagram_son_guncellenme' => $guncellenme_tarihi,
                ]);
            }
        }else{
            $influencerHesap = InfluencerHesap::create([
                'influencer_cari' => $request->influencer_cari,
                'platform' => $request->platform,
                'profil_linkleri' => $request->profil_linkleri,
                'etiketler' => $request->etiketler,
                'dropzone_files' => $request->dropzone_files,
            ]);
        }
        return response()->json($influencerHesap);
    }

    public function list(Request $request){
        $model = InfluencerHesap::with('cari');
        return Datatables::of($model)
        ->addColumn('dil', function ($data) {
            return 'asdasd';
        })
        ->addColumn('dogrulanmis_hesap', function ($data) {
            return 'asdasd';
        })
        ->addColumn('saglayici', function ($data) {
            return $data->cari->ad . " " . $data->cari->soyad;
        })
        ->editColumn('created_at' , function($data){
            return $data->created_at->format('d/m/Y H:i:s');
        })
        ->editColumn('updated_at' , function($data){
            return $data->updated_at->format('d/m/Y H:i:s');
        })
        ->filterColumn('saglayici', function($query, $keyword) {
            $query->whereHas('cari.saglayici', function ($q) use ($keyword) {
                $q->where('ad', 'LIKE', "%{$keyword}%")->orWhere('soyad', 'LIKE', "%{$keyword}%");
            });
        })
        ->make(true);
    }

    public function list2(Request $request){
        $instagramHesaplari = InfluencerHesap::where('platform' , 'INSTAGRAM')->get();

        foreach ($instagramHesaplari as $key => $value) {
            $url =  $value->profil_linkleri;
            if (filter_var($url, FILTER_VALIDATE_URL)) { 
                preg_match('#(?:(?:http|https):\/\/)?(?:www.)?(?:instagram.com|instagr.am|instagr.com)\/(\w+)#', $url, $matches);
                $username = $matches[1];
            }else{
                $username = $value->profil_linkleri;
            }

            $userInfo = Http::withHeaders([
                'X-RapidAPI-Key' => 'e3001ebf9dmsh1b4b3500290c749p174a6cjsn0150edd37e54',
                'X-RapidAPI-Host' => 'instagram-scraper-2022.p.rapidapi.com'
            ])->get('https://instagram-scraper-2022.p.rapidapi.com/ig/info_username/' , [
                'user' => $username,
            ]);

            $userPosts = Http::withHeaders([
                'X-RapidAPI-Key' => 'e3001ebf9dmsh1b4b3500290c749p174a6cjsn0150edd37e54',
                'X-RapidAPI-Host' => 'instagram-scraper-2022.p.rapidapi.com'
            ])->get('https://instagram-scraper-2022.p.rapidapi.com/ig/posts_username/' , [
                'user' => $username,
            ]);

            return $userPosts;

            $hesap_bilgileri = [
                'takipci' => $userInfo->user->follower_count,
            ];
            return $userInfo;
        }

        
    }
}
