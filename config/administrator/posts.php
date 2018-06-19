<?php

use App\Post;

return [
    'title'=>'文章',
    'heading'=>'文章管理',
    'single'=>'文章',
    'model'=>Post::class,
//    'permission'=>function(){
//        return Auth::user()->can('manage_contents');
//    },
    'columns'=>[
        'id'=>[
            'title'=>'ID',
            'sortable'=>false,
        ],
        'title'=>[
            'title'=>'标题',
            'sortable'=>false,
//            'output'=>function($title,$model){
//                return '<a href="/posts/'.$model->id.'" target=_blank>'.$title.'</a>';
//            }
        ],
        'content'=>[
            'title'=>'内容',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => '管理',
            'sortable' => false,
        ],
    ],

    // 『模型表单』设置项
    'edit_fields' => [
        'title' => [
            'title' => '标题',
            'type'=>'text',
        ],
        'content' => [
            'title' => '内容',
            'type'  => 'textarea',
        ],
    ],
    // 『数据过滤』设置
    'filters' => [
        'title' => [
            'title' => '标题',
        ],
        'content' => [
            // 过滤表单条目显示名称
            'title' => '内容',
        ],
    ],
];