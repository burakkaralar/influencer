<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class HesapController extends Controller
{
    public function index(){
        return view('pages.hesap.index');
    }

    public function newPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ],[
            'required' => ':attribute alanı gereklidir',
            'string'   => ':attribute alanı string olmalıdır.',
            'min'      => ':attribute alanı minimum 6 karakter olmalıdır',
            'confirmed' => ':attribute alanı eşleşmesi gerekmektedir.'
        ]);

        if ($validator->fails()) {
           $message = [
            'message' => $validator->errors()
           ];
           return response($message, 400);
        }else{
            $user = User::find(auth()->user()->id);
            if (!Hash::check($request->current_password, $user->password)) {
                $message = [
                    'message' => [
                        'error' => 'Geçerli şifreniz yanlış'
                    ]
                ];
                return response($message , 400);
            }else{
                $user->password = Hash::make($request->new_password);
                $user->save();
                $message = ['success' => 'Şifreniz güncellendi'];
                return response($message , 200);
            }
        }
    }
}
