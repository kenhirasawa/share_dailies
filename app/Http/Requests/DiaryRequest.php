<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaryRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'post.date' => 'required',
            'post.title' => 'required|string|max:50',
            'post.body' => 'required|string|max:200'#200バイトのこと
        ];
    }
}
