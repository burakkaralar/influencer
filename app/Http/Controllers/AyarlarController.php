<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\Instagram2HaftaJob;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Ayarlar;
use Illuminate\Support\Str;
class AyarlarController extends Controller
{
    public function index(){
        $ayar = Ayarlar::first();
        return view('pages.ayarlar.index' , compact('ayar'));
    }

    public function instagramOtomatik(Request $request){
        
    }

    public function instagram2Haftalik(Request $request){
        Instagram2HaftaJob::dispatch();
    }

    public function rolEkle(Request $request){
        $role = Role::create(['name' => $request->rol_ismi]);
        return response()->json($role);
    }

    public function rolSearch(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Role::where('name', 'like', '%' .$search . '%')->count();
            if($count > 0){
                $roller = Role::where('name', 'like', '%' .$search . '%')->get();
                $response = array();
                foreach($roller as $rol){
                    $response[] = array(
                        "id"=>$rol->id,
                        "text"=>$rol->name,
                    );
                }
                return response()->json($response);
            }
        }
    }

    public function izinEkle(Request $request){
        $permission = Permission::create(['name' => $request->izin_ismi]);
        return response()->json($permission);
    }

    public function izinSearch(Request $request){
        $search = $request->term;
        $result = Str::of($search)->trim()->isNotEmpty();

        if($result){
            $count = Permission::where('name', 'like', '%' .$search . '%')->count();
            if($count > 0){
                $izinler = Permission::where('name', 'like', '%' .$search . '%')->get();
                $response = array();
                foreach($izinler as $izin){
                    $response[] = array(
                        "id"=>$izin->id,
                        "text"=>$izin->name,
                    );
                }
                return response()->json($response);
            }
        }
    }

    public function atamaYap(Request $request){
        $rol = Role::find($request->rol);
        $izinler = Permission::whereIn('id', $request->izinler)->get();
        $rol->syncPermissions($izinler);
    }
    
}
