@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('message'))
    <div class="alert alert-success text-center text-lg">
        {{session('message')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger text-center text-lg">
        {{session('error')}}
    </div>
@endif