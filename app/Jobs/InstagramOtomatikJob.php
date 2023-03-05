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
use App\Models\Ayarlar;
class InstagramOtomatikJob implements ShouldQueue
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
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => 'db6dbdc002msha55659e485f0443p12b26djsnffe11f664cef',
            'X-RapidAPI-Host' => 'instagram-data1.p.rapidapi.com'
        ])->get('https://instagram-data1.p.rapidapi.com/user/info', [
            'username' => 'burakkaralar',
        ]);
        $toplamTakipciSayisi = $response['edge_followed_by']['count'];
        $toplamBegeniSayisi  = 0;
        $toplamYorumSayisi   = 0;
        foreach($response['edge_owner_to_timeline_media']['edges'] as $key => $value){
            //beğeni sayısı return $value['node']['edge_liked_by']['count'];
            //yorum sayısı return  $value['node']['edge_media_to_comment']['count'];
            $toplamBegeniSayisi = $toplamBegeniSayisi + $value['node']['edge_liked_by']['count'];
            $toplamYorumSayisi  = $toplamYorumSayisi  + $value['node']['edge_media_to_comment']['count'];
        }

        $toplamEtkilesimSayisi = $toplamBegeniSayisi + $toplamYorumSayisi;
        $sonuc = $toplamEtkilesimSayisi / $toplamTakipciSayisi * 100;
        return number_format($sonuc, 2, '.');
    }
}
