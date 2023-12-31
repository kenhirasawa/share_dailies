<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function dialies()
    {
        return $this->hasMany(Diary::class);
    }
    
    public function followings(){
        return $this->belongsToMany(User::class,'follows','follower_user_id','followee_user_id');
    }
    
    public function followers(){
        return $this->belongsToMany(User::class,'follows','followee_user_id','follower_user_id');
    }
    
    public function getPaginateByLimit(int  $limit_count =10)
    {
        return $this->followings()->orderBy('name','ASC')->paginate($limit_count); //ASCが昇順 
    }
}
