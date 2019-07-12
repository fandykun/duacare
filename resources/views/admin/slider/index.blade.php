@extends('layouts.admin')

@section('style')
<style>
</style>    
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Slider</h1>
    <p class="mb-4">Gatau ini nanti dipake dimana, disediain aja</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Database Slider</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Manage</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{ $slider->name }}</td>
                        <td><img src="{{ asset('storage/slider/'.$slider->image) }}"></td>
                        <td class="align-middle text-center">
                            <a href="#" class="btn btn-warning btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection


@section('script')
<script>
    $("#nav-slider").addClass("active");
</script>
@endsection