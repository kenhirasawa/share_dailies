<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Diary extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getPaginateByLimit(int  $limit_count =10)
    {
        return $this->where('user_id',Auth::id())->orderBy('updated_at','DESC')->paginate($limit_count);
    }
   
    protected $fillable =[
        'title',
        'body',
        'date',
        'user_id',
        'image_url',
    ];
}
