@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form action="{{route('posts.update',$post->id)}}" method="POST" accept-charset="UTF-8">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <input class="form-control" type="text" name="title" value="{{$post->title}}"><br>
                            <textarea class="form-control" rows="3" placeholder="内容" name="content">{{$post->content}}</textarea><br>
                            <button class="btn btn-default" type="submit">更新</button>
                        </form>
                    </div>
                    @include('layouts.errors')
                </div>
            </div>
        </div>
    </div>
@stop