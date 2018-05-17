@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
@include('layouts.errors')
            <div class="panel panel-default">
                <div class="panel-heading">HOME<a href="{{route('posts.index')}}?render=recent" class="btn btn-default">按创建时间排序</a></div>
                @foreach($posts as $post)
                <div class="panel-body">
                   <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a> || {{$post->content}}
                </div>
                @endforeach
            </div>
            {{$posts->render()}}
        </div>
    </div>
</div>
@endsection
