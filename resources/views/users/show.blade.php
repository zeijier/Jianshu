@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        用户名：{{$user->name}} 邮箱：{{$user->email}}
                        @if(Auth::id() != $user->id)
                            @if(Auth::user()->isFollowing($user->id))
                                <button type="button" id="star" class="btn btn-info" like-value="0" like-user="{{$user->id}}">取消关注</button>
                                @else
                                <button type="button" id="star" class="btn btn-info" like-value="1" like-user="{{$user->id}}">关注他</button>
                            @endif
                        @endif
                    </div>
                    @foreach($posts as $post)
                        <div class="panel-body">
                            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
                            @can('update',$user)<a href="{{route('posts.edit',$post->id)}}">编辑</a>@endcan
                            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                {{csrf_field()}}{{method_field('delete')}}
                                <button class="btn btn-default" onclick="return window.confirm('确定删除吗？')">删除</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop