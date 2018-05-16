@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">用户名：{{Auth::user()->name}} 邮箱：{{Auth::user()->email}}</div>
                    {{--<pre>{{var_dump($post)}}--}}
                        <div class="panel-body">
                            {{$post->content}}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop