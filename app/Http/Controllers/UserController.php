<?php

namespace App\Http\Controllers;

use Image;
use Storage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    protected $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function prof()
    {
        print(Auth::user());
        $user = Auth::user();
        return view('posts/prof')->with(['user'=>$user]);
    }
    
    public function store(User $user, Request $request)
    {
        //プロフィールアイコンのS3パス
        $image = Auth::user()->Profimg_path;
        //$img = ImageCreate(100,100);
        
        //S3バケット削除処理
        if($image != null) 
        {
            $base_url = basename($image);
            $s3_delete = Storage::disk('s3_profimg')->delete('profimg/'.$base_url);
        }
        
        //Pr欄の取得
        $Pr = $request['user.Pr'];
        
        //S3へ画像の保存
        $img = $request->file('user.Profimg_path');
        $path = Storage::disk('s3_profimg')->putFile('profimg', $img, 'public');
        $Profimg_path = Storage::disk('s3_profimg')->url($path);

        //DBの更新
        $this->user->updateUserProf(Auth::user()->id, $Pr, $Profimg_path);
        
        return redirect('posts/prof');
    }
    
}
