@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">用户名：{{$post->user->name}} 邮箱：{{$post->user->email}}</div>
                    {{--<pre>{{var_dump($post)}}--}}
                        <div class="panel-body">
                            {{$post->title}}
                            @can('delete',$post)
                                <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                    {{csrf_field()}}{{method_field('delete')}}
                                <button onclick="return window.confirm('确定删除吗？')">删除</button>
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