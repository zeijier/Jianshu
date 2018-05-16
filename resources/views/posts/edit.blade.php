@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form action="{{route('posts.update',$post->id)}}" method="POST">
                            {{csrf_field()}}{{method_field('patch')}}
                            <input type="text" name="title" value="{{$post->title}}"><br>
                            <textarea placeholder="内容" name="content">{{$post->content}}</textarea><br>
                            <button type="submit">更新</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop