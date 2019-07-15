@extends('layouts.admin')

@section('style')

@endsection

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Acara</h1>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tambahkan Acara</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="title" class="col-sm-1 col-form-label text-lg">Judul</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="title" placeholder="Input Judul" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="text-lg">Deskripsi</label>
                    <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                </div>

                <div class="my-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $("#nav-event").addClass("active");

</script>
@endsection