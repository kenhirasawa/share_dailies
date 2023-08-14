<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable=[
        'follower_user_id',
        'followee_user_id',
    ];
    
}
