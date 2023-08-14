<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FollowRequest;
use App\Models\Follow;
use App\Models\User;

class FollowController extends Controller
{
   public function follow()
   {
       $followings=Auth::user()->followings()->get();
       $followers =Auth::user()->followers()->get();
   }
   
   public function index()
   {
       $followings=Auth::user()->getPaginateByLimit(5);#usersテーブルからひぱってきている
       return view('follows.index')->with(['followers' =>$followings]);
   }
   
   public function register(FollowRequest $request)
   {
      $input=$request['follow']; #bladeファイルからemailの情報持ってくる
      $user = User::where('email',$input['email'])->first(); #ユーザー検索、あてはまるものひとつに絞っている
      
      $follow = new Follow();
        $input = [ #必ず配列にする[] fillの中のため
            'follower_user_id' => Auth::id(), #入れたいid、ログインしているユーザー＝自分
            'followee_user_id' => $user->id,
        ];
        $follow->fill($input)->save();

        $follow = new Follow(); #followモデルがfollowsテーブル指している newはインスタンス化
        $input = [
            'follower_user_id' => $user->id,
            'followee_user_id' => Auth::id(),
        ];
        $follow->fill($input)->save();
        
        
        return redirect('/follows');
   }

}