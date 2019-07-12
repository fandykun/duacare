@extends('layouts.admin')

@section('style')
<style>
</style>    
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Duacare Loyal Donature</h1>
    <p class="mb-4">Pokoknya buat DLD</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Database DLD</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Tahun Lulus</th>
                            <th>Alamat Asal</th>
                            <th>Alamat Sekarang</th>
                            <th>Email</th>
                            <th>Nomer HP</th>
                            <th>LINE</th>
                            <th>Instagram</th>
                            <th>Bank</th>
                            <th>Jenis Donasi</th>
                            <th>Besaran Donasi</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Tahun Lulus</th>
                            <th>Alamat Asal</th>
                            <th>Alamat Sekarang</th>
                            <th>Email</th>
                            <th>Nomer HP</th>
                            <th>LINE</th>
                            <th>Instagram</th>
                            <th>Bank</th>
                            <th>Jenis Donasi</th>
                            <th>Besaran Donasi</th>
                            <th>Manage</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($dlds as $dld)
                    <tr>
                        <td>{{ $dld->name }}</td>
                        <td>{{ $dld->graduation_year }} </td>
                        <td>{{ $dld->origin_address }}</td>
                        <td>{{ $dld->current_address }}</td>
                        <td>{{ $dld->email }}</td>
                        <td>{{ $dld->phone_number }}</td>
                        <td>{{ $dld->line }}</td>
                        <td>{{ $dld->instagram }}</td>
                        <td>{{ $dld->bank }}</td>
                        <td>{{ $dld->donation_type }}</td>
                        <td>{{ 'Rp. '.$dld->amount }}</td>
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
    $("#nav-dld").addClass("active");
</script>
@endsection