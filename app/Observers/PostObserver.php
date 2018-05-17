<?php
namespace App\Observers;


use App\Post;

class PostObserver{
    //更新时进行xss 过滤
    public function updating(Post $post){
        return $post = clean($post);
    }
}