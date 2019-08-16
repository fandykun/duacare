@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css" />
<style>
img {
    max-width: 120px;
    height: auto;
}
</style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('user.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambahkan Organizer</a>
        <h1 class="h3 mb-0 text-gray-800"><strong>ORGANIZER DUACARE</strong></h1>
        <a href="{{ route('user.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export Database</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Organizer</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display nowrap" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Deskripsi</th>
                            <th>Email</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Instagram</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Deskripsi</th>
                            <th>Email</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Instagram</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->division }} </td>
                        <td>{{ $user->description }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->facebook }}</td>
                        <td>{{ $user->twitter }}</td>
                        <td>{{ $user->linkedin }}</td>
                        <td>{{ $user->instagram }}</td>
                        <td><img src="{{ asset('storage/user/'.$user->image) }}"></td>
                        <td class="align-middle text-center">
                            <button class="btn btn-warning btn-icon-split btn-sm edit" data-id="{{ $user->id }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </button>
                            <button class="btn btn-danger btn-icon-split btn-sm delete" data-id="{{ $user->id }}">
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
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Organizer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data" id="edit-form">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PUT">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama" required name="name">
                        </div>
                        <div class="form-group">
                            <label for="division">Divisi</label>
                            <input type="text" class="form-control" id="division" placeholder="Masukkan divisi" required name="division">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>

                            <input type="text" class="form-control" id="description" placeholder="Masukkan deskripsi " required name="description">
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">www.facebook.com/</div>
                                </div>
                                <input type="text" class="form-control" id="facebook" placeholder="Masukkan facebook (opsional)" name="facebook">
                            </div>
                        </div>      
                        <div class="form-group">
                            <label for="">Twitter</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">www.twitter.com/</div>
                                </div>
                                <input type="text" class="form-control" id="twitter" placeholder="Masukkan twitter (opsional)" name="twitter">
                            </div>
                        </div>       
                        <div class="form-group">
                            <label for="">Linkedin</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">www.linkedin.com/id/</div>
                                </div>
                                <input type="text" class="form-control" id="linkedin" placeholder="Masukkan linkedin (opsional)" name="linkedin">
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">www.instagram.com/</div>
                                </div>
                                <input type="text" class="form-control" id="instagram" placeholder="Masukkan instagram (opsional)" name="instagram">
                            </div>
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
    <form method="post" id="deleteOrganizer" action="{{route('user.delete')}}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="DELETE">
        <input type="hidden" name="id" id="idOrganizer" name="id">
    </form> 

@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#nav-organizer").addClass("active");

    $(document).ready(function() {
        $('#myTable').DataTable( {
        "scrollX": true,
        lengthMenu: [[10, 5, 25, 50, 100, -1], [10, 5, 25, 50, 100, "All"]]
        });

    });

    $(document).on('click', ".edit", async function() {
        const dataId = $(this).attr('data-id');
        let newsData;
        try {
            newsData = await $.ajax({
                url: '{{url('admin/user/show')}}/' + dataId,
                dataType: 'json'
            });
        } catch (error) {
            alert('error');
            console.log(error);
            return;
        }
        $("#id").val(dataId)
        $("#name").val(newsData.name)
        $("#division").val(newsData.division)
        $("#description").val(newsData.description)
        $("#email").val(newsData.email)
        $("#facebook").val(newsData.facebook)
        $("#twitter").val(newsData.twitter)
        $("#linkedin").val(newsData.linkedin)
        $("#instagram").val(newsData.instagram)
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
            $('#idOrganizer').val(dataId);
            $('#deleteOrganizer').submit();
          } else {
            return false;
          }
        });
    });

</script>
@endsection