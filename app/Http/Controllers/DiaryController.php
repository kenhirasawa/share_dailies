<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaryRequest;
use App\Models\Diary;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class DiaryController extends Controller
{
    public function index (Diary $diary)
    {
        return view('diaries.index')->with(['diaries' => $diary->getPaginateByLimit()]);
    }
    
    public function show (Diary $diary) #web.phpの{}内のものと$~は等しくなる
    {
        return view('diaries.show')->with(['diary' => $diary]);
    }
    
    public function create()
    {
        return view ('diaries.create');
    }
    
    public function store(DiaryRequest $request,Diary $diary)
    {
        $input =$request['post'];#敢えてpostにしている
        $input['user_id']=Auth::id(); 
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
        $diary->fill($input)->save();
        return redirect('/diaries/'.$diary->id);
       
    }
    
    public function edit(Diary $diary)
    {
        return view("diaries.edit")->with(['diary'=>$diary]);
    }
    
    public function update(DiaryRequest $request, Diary$diary)
    {
        $input_diary=$request['post'];
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input_diary += ['image_url' => $image_url];
        }
        $diary->fill($input_diary)->save();
        
        return redirect ('/diaries/'.$diary->id);
    }
    
    public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/diaries');
    }
    public function friend_index(User $follower)#followerがusresテーブルの指定されたデータをとってきている
    {
         $diaries = Diary::where('user_id',$follower->id)->get();
         return view('diaries.friend_index')->with(['diaries' => $diaries,'follower'=>$follower]);
    }
    
    public function friend_show (User $follower,Diary $diary) #web.phpの{}内のものと$~は等しくなる
    {
        return view('diaries.friend_show')->with(['diary' => $diary,'follower'=>$follower]);
    }
}
