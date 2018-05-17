@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        用户名：{{$post->user->name}} 邮箱：{{$post->user->email}}
                        @if(Auth::id() != $post->user_id)
                            @if(Auth::user()->isFollowing($post->user_id))
                                <button type="button" id="star" class="btn btn-info" like-value="0" like-user="{{$post->user_id}}">取消关注</button>
                                @else
                                <button type="button" id="star" class="btn btn-info" like-value="1" like-user="{{$post->user_id}}">关注他</button>
                                @endif
                        @endif
                    </div>
                        <div class="panel-body">
                            {{$post->title}}
                            @can('delete',$post)
                                <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                    {{csrf_field()}}{{method_field('delete')}}
                                <button class="btn btn-default" onclick="return window.confirm('确定删除吗？')">删除</button>
                                </form>
                            @endcan
                        </div>
                    <div class="panel-heading">
                        {{$post->content}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop