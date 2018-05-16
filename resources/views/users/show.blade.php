@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">用户名：{{Auth::user()->name}} 邮箱：{{Auth::user()->email}}</div>
                    @foreach($posts as $post)
                        <div class="panel-body">
                            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
                            <a href="{{route('posts.edit',$post->id)}}">编辑</a>
                            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                {{csrf_field()}}{{method_field('delete')}}
                                <button onclick="return window.confirm('确定删除吗？')">删除</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop