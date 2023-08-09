<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
   public function follow()
   {
       $followings=Auth::user()->followings()->get();
       $followers =Auth::user()->followers()->get();
   }
   
   public function index()
   {
       $followings=Auth::user()->followings()->get();#usersテーブルからひぱってきている
       return view('follows.index')->with(['followers' =>$followings]);
   }
}
