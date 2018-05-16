@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">HOME</div>
                @foreach($posts as $post)
                <div class="panel-body">
                    {{$post->content}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
