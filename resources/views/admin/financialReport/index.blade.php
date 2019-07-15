@extends('layouts.admin')

@section('style')
<style>
</style>    
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('financialReport.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambahkan Laporan Keuangan</a>
        <h1 class="h3 mb-0 text-gray-800"><strong>LAPORAN KEUANGAN</strong></h1>
        <a href="{{ route('financialReport.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export Database</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan Keuangan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Link URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Link URL</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach($financialReports as $fr)
                    <tr>
                        <td class="text-center">{{ $nomor++ }}</td>
                        <td>{{ $fr->month }}</td>
                        <td>{{ $fr->year }} </td>
                        <td><a href="{{ 'http://'.$fr->link_url }}" target="_blank">{{ $fr->link_url }}</a></td>

                        <td class="align-middle text-center">
                            <button class="btn btn-warning btn-icon-split btn-sm edit" data-id="{{ $fr->id }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </button>
                            <button class="btn btn-danger btn-icon-split btn-sm delete" data-id="{{ $fr->id }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                            </button>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalEdit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Laporan Keuangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('financialReport.update') }}" enctype="multipart/form-data" id="edit-form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="">Bulan</label>
                        <select class="form-control" id="month" name="month" required>
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
                    <div class="form-group">
                        <label for="">Tahun</label>
                        <input type="text" class="form-control" id="year" placeholder="Masukkan judul" required name="year">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Link URL</label>
                        <textarea name="link_url" class="form-control" id="link_url" rows="2" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<form method="post" id="deleteFinancialReport" action="{{route('financialReport.delete')}}">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    <input type="hidden" name="id" id="idFinancialReport" name="id">
</form> 

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#nav-financialReport").addClass("active");
    
    $(document).on('click', ".edit", async function() {
        const dataId = $(this).attr('data-id');
        let newsData;
        try {
            newsData = await $.ajax({
                url: '{{url('admin/financial-report/show')}}/' + dataId,
                dataType: 'json'
            });
        } catch (error) {
            alert('error');
            console.log(error);
            return;
        }
        $("#id").val(dataId)
        $("#month").val(newsData.month)
        $("#year").val(newsData.year)
        $("#link_url").val(newsData.link_url)
        $("#modalEdit").modal('show');
    });

    $(document).on('click', ".delete", async function() {
        const dataId = $(this).attr('data-id');
        console.log(dataId)
        swal({
          title: "Are you sure?",
          text: "Data yang telah dihapus tidak dapat dikembalikan!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $('#idFinancialReport').val(dataId);
            $('#deleteFinancialReport').submit();
          } else {
            return false;
          }
        });
    });

</script>
@endsection