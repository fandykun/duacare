@extends('layouts.admin')

@section('style')
<style>
</style>    
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Testimoni</h1>
    <p class="mb-4">Testimoni masukkan disini.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Database Testimoni</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Judul</th>
                            <th>Detail</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>Judul</th>
                            <th>Detail</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Manage</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($testimonies as $testimony)
                    <tr>
                        <td>{{ $testimony->title }}</td>
                        <td>{{ $testimony->detail }} </td>
                        <td class="text-xs">{{ $testimony->description }}</td>
                        <td>
                            @if(!empty($testimony->image))
                                <img src="{{ asset('storage/testimony/'.$testimony->image) }}">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td class="align-middle text-center">
                            <a href="#" class="btn btn-warning btn-icon-split btn-sm" style="margin-bottom: 6px;">
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
    $("#nav-testimony").addClass("active");
</script>
@endsection