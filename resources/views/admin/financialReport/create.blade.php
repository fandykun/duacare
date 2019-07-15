@extends('layouts.admin')

@section('style')

@endsection

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Keuangan</h1>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tambahkan Laporan Keuangan</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('financialReport.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="title" class="col-sm-1 col-form-label text-lg">Bulan</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="month" name="month" required autofocus>
                            <option value="disabled" disabled selected>Bulan</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-1 col-form-label text-lg">Tahun</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="year" placeholder="Input Tahun" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="text-lg">Link URL</label>
                    <textarea name="link_url" class="form-control" rows="3" required></textarea>
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
    $("#nav-financialReport").addClass("active");

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