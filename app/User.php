<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function post(){
        return $this->hasMany(Post::class);
    }
//     有多少粉丝的关联
    public function fans(){
        return $this->belongsToMany(User::class,'fans','user_id','fans_id');
    }
//    关注某人 的关联
    public function following(){
        return $this->belongsToMany(User::class,'fans','fans_id','user_id');
    }

    //    关注操作
    public function isGuanzhu($ids,$num){
        if (is_array($ids)){
            $ids = compact($ids);
        }
//      $num 为1 则是关注，为0则是取消关注
        if ($num == 1){
            $this->following()->sync($ids,false);
        }else{
            $this->following()->detach($ids);
        }
    }
//    是否关注了 $user_id
    public function isFollowing($user_id){
        return $this->following->contains($user_id);
    }

}
