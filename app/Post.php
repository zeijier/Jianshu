<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = ['title','content'];

    public function scopeWitchOrder($query,$order){
//        echo $order;die;
        switch ($order){
            case 'recent'://按创建时间排序
                $query->recent();break;
            default://其他的按修改时间排序
                $query->recentReplied();
            break;
        }
        //预加载
        return $query->with('user');
    }
    public function scopeRecent($query){
        return $query->orderBy('created_at','desc');
    }
    public function scopeRecentReplied($query){
        return $query->orderBy('updated_at','desc');
    }
}
