@extends('layouts.admin')

@section('style')
<style>
img {
    max-width: 240px;
    height: auto;
}
</style>
@endsection

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider</h1>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tambahkan Slider</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="" class="col-sm-1 col-form-label text-lg">Nama</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="name" placeholder="Input Nama">
                    </div>
                </div>

                <div class="custom-file col-sm-4">
                    <input type="file" accept="image/*" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Upload Gambar</label>
                    <div class="text-center my-2">
                        <img id="output" class="img-fluid img-thumbnail">
                    </div>

                    <div class="my-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $("#nav-slider").addClass("active");

    $('.custom-file-input').on('change', function() { 
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName); 
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#output')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
        else {
            $('#output').attr('src', '');
        }
    }

    $("#customFile").change(function() {
        readURL(this);
    });

</script>
@endsection