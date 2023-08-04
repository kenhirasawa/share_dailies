<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index (Diary $diary)
    {
        return view('dialies.index')->with(['dialies' => $diary->getPagintateByLimit()]);
    }
    public function show (Diary $diary)
    {
        return view('dialies.show')->with(['post' => $diary]);
    }
}