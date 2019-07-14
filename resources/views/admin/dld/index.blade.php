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
        <h1 class="h3 mb-0 text-gray-800">Duacare Loyal Donature</h1>
        <a href="{{ route('dld.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Export Database</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tabel DLD</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display nowrap" id="myTable" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Tahun Lulus</th>
                            <th>Alamat Lumajang</th>
                            <th>Alamat Sekarang</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>ID LINE</th>
                            <th>Instagram</th>
                            <th>Bank</th>
                            <th>Jenis Donasi</th>
                            <th>Besaran Donasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Tahun Lulus</th>
                            <th>Alamat Lumajang</th>
                            <th>Alamat Sekarang</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>ID LINE</th>
                            <th>Instagram</th>
                            <th>Bank</th>
                            <th>Jenis Donasi</th>
                            <th>Besaran Donasi</th>
                            <th>Action</th>
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
                            <button class="btn btn-warning btn-icon-split btn-sm edit" data-id="{{ $dld->id }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </button>
                            <button class="btn btn-danger btn-icon-split btn-sm delete" data-id="{{ $dld->id }}">
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit DLD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dld.update') }}" enctype="multipart/form-data" id="edit-form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan judul" required name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Lulus</label>
                        <input type="text" class="form-control" id="graduation_year" placeholder="Masukkan judul" required name="graduation_year">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Lumajang</label>
                        <input type="text" class="form-control" id="origin_address" placeholder="Masukkan judul" required name="origin_address">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Sekarang</label>
                        <input type="text" class="form-control" id="current_address" placeholder="Masukkan judul" required name="current_address">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan judul" required name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor HP</label>
                        <input type="text" class="form-control" id="phone_number" placeholder="Masukkan judul" required name="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="">ID LINE</label>
                        <input type="text" class="form-control" id="line" placeholder="Masukkan judul" name="line">
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" id="instagram" placeholder="Masukkan judul" name="instagram">
                    </div>
                    <div class="form-group">
                        <label for="">Bank</label>
                        <select class="form-control" id="bank" name="bank" required>
                            <option value="disabled" disabled selected>Bank yang digunakan</option>
                            <option value="Bank Mandiri">Bank Mandiri</option>
                            <option value="Bank Negara Indonesia (BNI)">Bank Negara Indonesia (BNI)</option>
                            <option value="Bank Rakyat Indonesia (BRI)">Bank Rakyat Indonesia (BRI)</option>
                            <option value="Bank Central Asia (BCA)">Bank Central Asia (BCA)</option>
                            <option value="Bank Jatim">Bank Jatim</option>
                            <option value="Bank BNI Syariah">Bank BNI Syariah</option>
                            <option value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
                            <option value="BCA Syariah">BCA Syariah</option>
                            <option value="Bank BRI Syariah">Bank BRI Syariah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Donasi</label>
                        <select class="form-control" id="donation_type" name="donation_type" required>
                            <option value="disabled" disabled selected>Jenis Donasi</option>
                            <option value="Bulanan">Bulanan</option>
                            <option value="Insidental">Insidental</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Besaran Donasi</label>
                        <input type="text" class="form-control amount" id="amount" placeholder="Masukkan judul" name="amount">
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
<form method="post" id="deleteDLD" action="{{route('dld.delete')}}">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    <input type="hidden" name="id" id="idDLD" name="id">
</form> 

@endsection


@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#nav-dld").addClass("active");

    $(document).ready(function() {
        $('#myTable').DataTable( {
        "scrollX": true,
        lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]
        });

        $('.amount').mask('0.000.000.000.000', {reverse: true});
    });

    $(document).on('click', ".edit", async function() {
        const dataId = $(this).attr('data-id');
        let newsData;
        try {
            newsData = await $.ajax({
                url: '{{url('admin/dld/show')}}/' + dataId,
                dataType: 'json'
            });
        } catch (error) {
            alert('error');
            console.log(error);
            return;
        }

        $("#id").val(dataId)
        $("#name").val(newsData.name)
        $("#graduation_year").val(newsData.graduation_year)
        $("#origin_address").val(newsData.origin_address)
        $("#current_address").val(newsData.current_address)
        $("#email").val(newsData.email)
        $("#phone_number").val(newsData.phone_number)
        $("#line").val(newsData.line)
        $("#instagram").val(newsData.instagram)
        $("#bank").val(newsData.bank)
        $("#donation_type").val(newsData.donation_type)
        $("#amount").val(newsData.amount)
        
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
            $('#idDLD').val(dataId);
            $('#deleteDLD').submit();
          } else {
            return false;
          }
        });
    });

</script>
@endsection