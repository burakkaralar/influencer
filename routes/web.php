<?php

use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\InfluencerHesapController;
use App\Http\Controllers\SaglayiciController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AyarlarController;
use App\Http\Controllers\KullanicilarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HesapController;
use App\Http\Controllers\OnayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test', function(){
    // $response = Http::asForm()->post('https://open.tiktokapis.com/v2/oauth/token/', [
    //     'client_key' => 'awr824c039w8r99w',
    //     'client_secret' => '79dd98484b2478fa6998e5006fc996eb',
    //     'grant_type' => 'client_credentials'
    // ]);

    // return $response;
    $accessToken = 'clt.531d0f171f3fb736e1ac18c04c718aa7esDW8QqaylZQcNsfT0xTixAEcFu6';

    // TikTok kullanıcı adı
    $username = '@cemresolmaz';

    $response = Http::withHeaders([
        'Authorization' => 'Bearer clt.531d0f171f3fb736e1ac18c04c718aa7esDW8QqaylZQcNsfT0xTixAEcFu6'
    ])->get('https://open.tiktokapis.com/v2/user/info/?open_id=cemresolmaz');


    return $response;

    
    // $channelName = 'newdaynewgame';
    // $apiKey = "AIzaSyCtw48YNHrF2zk3NIplbpBjz6ZyxknoRQ8";
    // $url = 'https://www.googleapis.com/youtube/v3/videos?part=statistics&id=sTPtBvcYkO8&key='.$apiKey;
    // $url = 'https://www.googleapis.com/youtube/v3/channels?part=id&forUsername=' . $channelName . '&key=' . ;
    // $response = Http::get($url);
    // $channelId = $response['items'][0]['id'];

    // // Kanal istatistiklerini almak için YouTube API isteği yapın
    // $response = Http::get('https://www.googleapis.com/youtube/v3/channels', [
    //     'part' => 'statistics',
    //     'id' => $channelId,
    //     'key' => $apiKey,
    // ]);

    // // İstek başarılı olduysa kanal istatistiklerini ekrana yazdırın
    // if ($response->successful()) {
    //     $statistics = $response->json()['items'][0]['statistics'];
    //     return $statistics;
    //     $viewCount = $statistics['viewCount'];
    //     $subscriberCount = $statistics['subscriberCount'];
    //     $videoCount = $statistics['videoCount'];
        

    //     echo "Total Like Count: $likeCount\n";
    //     echo "View Count: $viewCount\n";
    //     echo "Subscriber Count: $subscriberCount\n";
    //     echo "Video Count: $videoCount\n";
    // } else {
    //     echo 'API request failed';
    // }
    });
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/', [AnasayfaController::class, 'index']);
    Route::get('/hesap', [HesapController::class, 'index'])->name('hesap');
    Route::post('/hesap/guncelle', [HesapController::class, 'newPassword'])->name('hesap.newPassword');
    Route::get('/anasayfa', [AnasayfaController::class, 'index'])->name('anasayfa');
    Route::get('/cari', [CariController::class, 'index'])->name('cari');
    Route::post('/cari/ekle' , [CariController::class , 'store'])->name('cari.ekle');
    Route::post('/cari/liste' , [CariController::class , 'list'])->name('cari.list');
    Route::post('/cari/search' , [CariController::class , 'search'])->name('cari.search');
    Route::post('/cari/search/ulke' , [CariController::class , 'searchUlke'])->name('cari.search.ulke');
    Route::post('/cari/search/sehir' , [CariController::class , 'searchSehir'])->name('cari.search.sehir');
    Route::post('/cari/search/ilce' , [CariController::class , 'searchIlce'])->name('cari.search.ilce');
    Route::post('/cari/search/dil' , [CariController::class , 'searchDil'])->name('cari.search.dil');
    Route::get('/influencer-hesap', [InfluencerHesapController::class, 'index'])->name('influencer-hesap');
    Route::post('/influencer-hesap/ekle', [InfluencerHesapController::class, 'store'])->name('influencer-hesap.ekle');
    Route::post('/influencer-hesap/dropzone/istatistik', [InfluencerHesapController::class, 'dropzone_istatistik'])->name('influencer-hesap.dropzone.istatistik');
    Route::post('/influencer-hesap/liste' , [InfluencerHesapController::class , 'list'])->name('influencer-hesap.list');
    Route::get('/influencer-hesap/liste2' , [InfluencerHesapController::class , 'list2']);
    Route::get('/saglayici', [SaglayiciController::class, 'index'])->name('saglayici');
    Route::post('/saglayici/ekle' , [SaglayiciController::class , 'store'])->name('saglayici.ekle');
    Route::post('/saglayici/liste' , [SaglayiciController::class , 'list'])->name('saglayici.list');
    Route::post('/saglayici/search' , [SaglayiciController::class , 'search'])->name('saglayici.search');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/kategori/ekle' , [KategoriController::class , 'store'])->name('kategori.ekle');
    Route::post('/kategori/search' , [KategoriController::class , 'search'])->name('kategori.search');
    Route::post('/kategori/liste' , [KategoriController::class , 'list'])->name('kategori.list');
    Route::get('/kullanicilar', [KullanicilarController::class, 'index'])->name('kullanicilar');
    Route::post('/kullanicilar/ekle' , [KullanicilarController::class , 'store'])->name('kullanicilar.ekle');
    Route::post('/kullanicilar/search' , [KullanicilarController::class , 'search'])->name('kullanicilar.search');
    Route::post('/kullanicilar/liste' , [KullanicilarController::class , 'list'])->name('kullanicilar.list');
    Route::get('/ayarlar', [AyarlarController::class, 'index'])->name('ayarlar');
    Route::post('/ayarlar/instagram/cron/otomatik' , [AyarlarController::class , 'instagramOtomatik'])->name('ayarlar.instagram.otomatik');
    Route::post('/ayarlar/instagram/cron/2-haftalik' , [AyarlarController::class , 'instagram2Haftalik'])->name('ayarlar.instagram.2_haftalik');
    Route::post('/ayarlar/rol/ekle' , [AyarlarController::class , 'rolEkle'])->name('ayarlar.rol.ekle');
    Route::post('/ayarlar/rol/search' , [AyarlarController::class , 'rolSearch'])->name('ayarlar.rol.search');
    Route::post('/ayarlar/izin/ekle' , [AyarlarController::class , 'izinEkle'])->name('ayarlar.izin.ekle');
    Route::post('/ayarlar/izin/search' , [AyarlarController::class , 'izinSearch'])->name('ayarlar.izin.search');
    Route::post('/ayarlar/rol/atama-yap' , [AyarlarController::class , 'atamaYap'])->name('ayarlar.rol.atama.yap');
    Route::get('/onay/bekleyenler' , [OnayController::class , 'index'])->name('onay.bekleyenler');
});
Route::get('/error', function () {
    abort(500);
});
 Route::get('/basvuru', [OnayController::class, 'basvuru_index'])->name('basvuru_index');

require __DIR__.'/auth.php';
