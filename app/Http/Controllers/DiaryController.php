<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaryRequest;
use App\Models\Diary;
use Illuminate\Support\Facades\Auth;


class DiaryController extends Controller
{
    public function index (Diary $diary)
    {
        return view('diaries.index')->with(['diaries' => $diary->getPaginateByLimit()]);
    }
    
    public function show (Diary $diary)
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
        $diary->fill($input)->save();
        return redirect('/diaries/'.$diary->id);
    }
}
