@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-success">
            {{$error}}
        </div>
    @endforeach
@endif
@if(Session::has('fail'))
    <div class="alert alert-success">
        {{Session::get('fail')}}
    </div>
@endif