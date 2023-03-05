<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use App\Models\InfluencerHesap;
use Carbon\Carbon;
class Instagram2HaftaJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        $hesaplarCount = InfluencerHesap::where('platform' , 'INSTAGRAM')->where('instagram_son_guncellenme', '<=', now()->subWeeks(2))->count();
        if($hesaplarCount > 0){
            $guncellenme_tarihi = Carbon::now();
            $hesaplar = InfluencerHesap::where('platform' , 'INSTAGRAM')->where('instagram_son_guncellenme', '<=', now()->subWeeks(2))->get();
            foreach ($hesaplar as $key => $value){
                $username = $value->profil_linkleri;
                $response = Http::withHeaders([
                    'X-RapidAPI-Key' => 'db6dbdc002msha55659e485f0443p12b26djsnffe11f664cef',
                    'X-RapidAPI-Host' => 'instagram-data1.p.rapidapi.com'
                ])->get('https://instagram-data1.p.rapidapi.com/user/info', [
                    'username' => $username,
                ]);

                if(!$response['is_private']){
                    $toplamTakipciSayisi = $response['edge_followed_by']['count'];
                    $toplamTakipEttigiSayisi = $response['edge_follow']['count'];
                    $toplamBegeniSayisi  = 0;
                    $toplamYorumSayisi   = 0;
                    $kac_post = count($response['edge_owner_to_timeline_media']['edges']);
                    foreach($response['edge_owner_to_timeline_media']['edges'] as $k => $val){
                        $toplamBegeniSayisi = $toplamBegeniSayisi + $val['node']['edge_liked_by']['count'];
                        $toplamYorumSayisi  = $toplamYorumSayisi  + $val['node']['edge_media_to_comment']['count'];
                    }
                    $toplamEtkilesimSayisi = $toplamBegeniSayisi + $toplamYorumSayisi;
                    $sonuc = $toplamEtkilesimSayisi / $toplamTakipciSayisi / $kac_post  * 100;
                    $sonuc = number_format($sonuc, 2, '.');
                    $profil_resmi = $response['profile_pic_url'];
                    $value->instagram_son_guncellenme = $guncellenme_tarihi;
                    $value->toplam_takipci = $toplamTakipciSayisi;
                    $value->toplam_takip_edilen = $toplamTakipEttigiSayisi;
                    $value->son_begeni_toplami = $toplamBegeniSayisi;
                    $value->son_yorum_toplami = $toplamYorumSayisi;
                    $value->kac_posta_bakildi = $kac_post;
                    $value->profil_resmi = $profil_resmi;
                    $value->etkilesim_orani = $sonuc;
                    $value->save();
                }else{
                    $toplamTakipciSayisi = $response['edge_followed_by']['count'];
                    $toplamTakipEttigiSayisi = $response['edge_follow']['count'];
                    $profil_resmi = $response['profile_pic_url'];
                    $value->instagram_son_guncellenme = $guncellenme_tarihi;
                    $value->toplam_takipci = $toplamTakipciSayisi;
                    $value->toplam_takip_edilen = $toplamTakipEttigiSayisi;
                    $value->son_begeni_toplami = 0;
                    $value->son_yorum_toplami = 0;
                    $value->kac_posta_bakildi = 0;
                    $value->profil_resmi = $profil_resmi;
                    $value->etkilesim_orani = 0;
                    $value->save();
                }
            }
        }
    }
}
