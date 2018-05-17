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
        switch ($order){
            case 'recent':
                $query->recent();break;
            default:
                $query->recentReplied();
            break;
        }
        return $query->with();
    }
}
